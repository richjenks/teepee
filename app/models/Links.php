<?php

namespace RichJenks\Teepee;

class Links {

	private $links;   // Array of custom link data
	private $request; // Path to current directory from webroot
	private $show;    // Whether the currently-iterated link should show

	public function __construct($request) {

		// Set links as array
		$this->links = array();

		// Set request
		$this->request = $request;

	}

	/**
	 * get_links_data
	 * 
	 * Populates the `links` var with custom links that should show for
	 * the current request
	 * 
	 * @return array Array of data for Custom Links
	 */

	public function get_links_data() {
		
		global $config;

		// Iterate through each link
		foreach ($config['custom_links'] as $link) {

			// Reset show to false
			$this->show = false;

			// Iterate through each valid request
			foreach ($link['show'] as $request) {

				// Check if current link should show
				if ($request === $this->request || $request === '*') {
					$this->show = true;
				}

			}

			// If this link should be shown
			if ($this->show) {

				// If `new` not set, assume false
				if (!isset($link['new'])) { $link['new'] = false; }

				// Push custom link
				array_push($this->links, array(
					'icon'     => 'folder-page',
					'name'     => $link['name'],
					'uri'      => $link['uri'],
					'new'      => $link['new'],
					'faded'    => true,
				));
			
			}

		}

		// Sort links by name, case insensitive
		$this->links = Helper::sort_arr_by_key($this->links, 'name');

		return $this->links;

	}

}