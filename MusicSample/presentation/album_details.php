<?php
	class AlbumDetails
	{
		// Public variables to be read from Smarty template
		public $mAlbum;
		public $mYear;
		public $mTracks;
		public $mAlbumID;

		// Class constructor
		public function __construct()
		{
			if (isset($_GET['album_id']))
			{
				$this->mAlbumID = $_GET['album_id'];
			}
 		}

		public function init()
		{
			// $this->mAlbum = ??
			// $release_date = $this->mAlbum['release_date'];
			// $this->mYear = substr($release_date,0,4);
			// $this->mTracks = ??
		}
	}
?>
