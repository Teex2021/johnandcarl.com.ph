<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="pagination_designs.php">
</head>
<body>
    
</body>
</html>



<?php
/**
 * Pagination Library by CodexWorld
 *
 * This Pagination class helps to integrate pagination with Ajax in PHP.
 *
 * @class		Pagination
 * @author		CodexWorld
 * @link		http://www.codexworld.com
 * @license		http://www.codexworld.com/license
 * @version		2.0
 */

//  sleep(2);
class Pagination{
	var $baseURL		= '';
	var $totalRows  	= '';
	var $perPage	 	= 10;
	var $numLinks		=  2;
	var $currentPage	=  0;
	var $firstLink   	= '&lsaquo;&lsaquo; First';
	var $nextLink		= 'Next&rsaquo;';
	var $prevLink		= '&lsaquo;Previous';
	var $lastLink		= 'Last &rsaquo;&rsaquo;';
	var $fullTagOpen	= '<div class="pagination">';
	var $fullTagClose	= '</div>';
	var $firstTagOpen	= '';
	var $firstTagClose	= '&nbsp;';
	var $lastTagOpen	= '&nbsp;';
	var $lastTagClose	= '';
	var $curTagOpen		= '&nbsp;<b>';
	var $curTagClose	= '</b>';
	var $nextTagOpen	= '&nbsp;';
	var $nextTagClose	= '&nbsp;';
	var $prevTagOpen	= '&nbsp;';
	var $prevTagClose	= '';
	var $numTagOpen		= '&nbsp;';
	var $numTagClose	= '';
	var $anchorClass	= '';
	var $showCount      	= true;
	var $currentOffset	= 0;
	var $contentDiv     	= '';
    	var $additionalParam	= '';
    
	function __construct($params = array()){
		if (count($params) > 0){
			$this->initialize($params);		
		}
		
		if ($this->anchorClass != ''){
			$this->anchorClass = 'class="'.$this->anchorClass.'" ';
		}	
	}
	
	function initialize($params = array()){
		if (count($params) > 0){
			foreach ($params as $key => $val){
				if (isset($this->$key)){
					$this->$key = $val;
				}
			}		
		}
	}
	
	/**
	 * Generate the pagination links
	 */	
	function createLinks(){ 
		// If total number of rows is zero, do not need to continue
		if ($this->totalRows == 0 OR $this->perPage == 0){
		   return '';
		}

		// Calculate the total number of pages
		$numPages = ceil($this->totalRows / $this->perPage);

		// Is there only one page? will not need to continue
		if ($numPages == 1){
			if ($this->showCount){
				$info = 'Showing : ' . $this->totalRows;
				return $info;
			}else{
				return '';
			}
		}

		// Determine the current page	
		if ( ! is_numeric($this->currentPage)){
			$this->currentPage = 0;
		}
		
		// Links content string variable
		$output = '';
		
		// Showing links notification
		if ($this->showCount){
		   $currentOffset = $this->currentPage;
		   $info = '<p class="pag_controls">Showing&nbsp;</p>' . ( '<p class="pag_controls">'.$currentOffset + 1 .'</p>' ). '&nbsp;' . ' <p class="pag_controls">to&nbsp;</p> ' ;
		
		   if( ( $currentOffset + $this->perPage ) < ( $this->totalRows -1 ) )
			  $info .= '<p class="pag_controls">' . $currentOffset + $this->perPage . '</p>' . '&nbsp;';
		   else
			  $info .= $this->totalRows;
		
		   $info .= ' <p class="pag_controls"> &nbsp;of&nbsp;</p> ' . '<p class="pag_controls">' . $this->totalRows . '</p>' . ' &nbsp;|&nbsp; ';
		
		   $output .= $info;
		}
		
		$this->numLinks = (int)$this->numLinks;
		
		// Is the page number beyond the result range? the last page will show
		if ($this->currentPage > $this->totalRows){
			$this->currentPage = ($numPages - 1) * $this->perPage;
		}
		
		$uriPageNum = $this->currentPage;
		
		$this->currentPage = floor(($this->currentPage/$this->perPage) + 1);

		// Calculate the start and end numbers. 
		$start = (($this->currentPage - $this->numLinks) > 0) ? $this->currentPage - ($this->numLinks - 1) : 1;
		$end   = (($this->currentPage + $this->numLinks) < $numPages) ? $this->currentPage + $this->numLinks : $numPages;

		// Render the "First" link
		if  ($this->currentPage > $this->numLinks){
			$output .= "<div class='page_nxtprv'>".$this->firstTagOpen 
				. $this->getAJAXlink( '' , $this->firstLink)
				. $this->firstTagClose."</div>"; 
		}

		// Render the "previous" link
		if  ($this->currentPage != 1){
			$i = $uriPageNum - $this->perPage;
			if ($i == 0) $i = '';
			$output .= "<div class='page_nxtprv'>".$this->prevTagOpen 
				. $this->getAJAXlink( $i, $this->prevLink )
				. $this->prevTagClose."</div>";
		}

		// Write the digit links
		for ($loop = $start -1; $loop <= $end; $loop++){
			$i = ($loop * $this->perPage) - $this->perPage;
					
			if ($i >= 0){
				if ($this->currentPage == $loop){
					$output .= "<div class='page_num_link_active'>".$this->curTagOpen.$loop.$this->curTagClose."</div>";
				}else{
					$n = ($i == 0) ? '' : $i;
					$output .= "<div class='page_num_link'>".$this->numTagOpen
						. $this->getAJAXlink( $n, $loop )
						. $this->numTagClose."</div>";
				}
			}
		}

		// Render the "next" link
		if ($this->currentPage < $numPages){
			$output .= "<div class='page_nxtprv'>".$this->nextTagOpen 
				. $this->getAJAXlink( $this->currentPage * $this->perPage , $this->nextLink )
				. $this->nextTagClose. "</div>";
		}

		// Render the "Last" link
		if (($this->currentPage + $this->numLinks) < $numPages){
			$i = (($numPages * $this->perPage) - $this->perPage);
			$output .= "<div class='page_nxtprv'>". $this->lastTagOpen . $this->getAJAXlink( $i, $this->lastLink ) . $this->lastTagClose ."</div>";
		}

		// Remove double slashes
		$output = preg_replace("#([^:])//+#", "\\1/", $output);

		// Add the wrapper HTML if exists
		$output = $this->fullTagOpen.$output.$this->fullTagClose;
		
		return $output;		
	}

	function getAJAXlink( $count, $text) {
        if( $this->contentDiv == '')
            return '<a href="'. $this->anchorClass . ' ' . $this->baseURL . $count . '">'. $text .'</a>';

        $pageCount = $count?$count:0;
        $this->additionalParam = "{'page' : $pageCount}";
		
	    return "<a href=\"javascript:void(0);\" " . $this->anchorClass . "
				onclick=\"$.post('". $this->baseURL."', ". $this->additionalParam .", function(data){
					   $('#". $this->contentDiv . "').html(data); }); return false;\">"
			   . $text .'</a>';
	}
}