<?php
	namespace Novae\Event;
	interface EventInterface {

		public function getTimestamp();
		public function setTimestamp($timestamp);
		public function getData();
		public function setData($data);

		public function getName();
		public function setName();
	}