<?php

	function setactive($path)
	{
		return Request::is($path)? 'active' : '';
	}