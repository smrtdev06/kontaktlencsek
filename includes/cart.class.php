<?
class Cart {
	var $items;
	
	function Cart () {
		$this->items = array ();
	}
	
	function AddItem ($code, $quantity = 1) {
		if ($code != '') {
			$found = false;
//			for ($i=0; $i<sizeof ($this->items); $i++) {
//				$item = $this->items[$i];
//				if ($item['id'] == $code)
//					$found = true;
//			}
			if (!$found) {
				$item['id'] = $code;
				$item['quantity'] = $quantity;
				array_push ($this->items, $item);
				return sizeof($this->items)-1;
			}
			$retcode = true;
		} else
			$retcode = false;
		
		return $retcode;
	}
	
	function DelItem ($index) {
//		if ($code != '') {
			$new_items = array ();
			for ($i=0; $i<sizeof ($this->items); $i++) {
				$item = $this->items[$i];
//				if ($item['id'] != $code)
				if ($i != $index)
					array_push ($new_items, $item);
			}
			$this->items = $new_items;
//      unset($this->items[$index]);
			$retcode = true;
//		} else
//			$retcode = false;
		
		return $retcode;
	}
	
	function SetQuantity ($index, $quantity) {
		if ($code != '') {
			for ($i=0; $i<sizeof ($this->items); $i++) {
				$item = $this->items[$i];
				if ($item['id'] == $code) {
					$item['quantity'] = $quantity;
					$this->items[$i] = $item;
				}
			}
			$retcode = true;
		} else
			$retcode = false;
		
		return $retcode;
	}
	
	function SetProperties($index, $properties = array())
	{
//		if ($code != '') {
			//for ($i=0; $i<sizeof ($this->items); $i++) {
				$item = $this->items[$index];
//				if ($item['id'] == $code) {
					$item['properties'] = $properties;
					$this->items[$index] = $item;
//				}
//			}
			$retcode = true;
//		} else
//			$retcode = false;
		
		return $retcode;
  }

	function SetPropertyValue($index, $property, $value)
	{
//		if ($code != '') {
//			for ($i=0; $i<sizeof ($this->items); $i++) {
				$item = $this->items[$index];
//				if ($item['id'] == $code) {
					$item['properties'][$property] = $value;
					$this->items[$index] = $item;
//				}
//			}
			$retcode = true;
//		} else
//			$retcode = false;
		
		return $retcode;
  }
}
?>
