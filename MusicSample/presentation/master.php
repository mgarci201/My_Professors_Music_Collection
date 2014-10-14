<?php
class Master
{
	// Define the template file for the page contents
	public $mContentsCell;
	public $mSideBar;

	// Class constructor
	public function __construct()
	{
	}

	// Initialize presentation object
	public function init()
	{
		// Load the database handler
		require_once BUSINESS_DIR . 'database_handler.php';

		// Load Business Tier
		require_once BUSINESS_DIR . 'collection.php';


 		if ($_SESSION['CurrentPage'] == 'Home' || $_SESSION['CurrentPage'] == 'Albums')
		{
			$this->mContentsCell = 'albums_list.tpl';
			if ($_SESSION['CurrentPage'] == 'Home')
				$this->mSideBar = 'not_implemented.tpl';
			else
				$this->mSideBar = 'not_implemented.tpl';
		}
		elseif ($_SESSION['CurrentPage'] == 'Details')
		{
			$this->mContentsCell = 'not_implemented.tpl';
			$this->mSideBar = 'not_implemented.tpl';
		}
		else
		{
			$this->mContentsCell = 'not_implemented.tpl';
			$this->mSideBar = 'not_implemented.tpl';
		}
	}
}
?>
