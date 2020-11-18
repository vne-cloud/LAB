<?php 
Class A {
	public function linear_equstion ($a,$b) {
		if ($a == 0){
		  return NULL;
		}
		return $this->X=-($b/$a);
	}
	protected $X;
}
Class B extends A {
    protected function dis($a, $b, $c) {
		$x = ($b**2)-4*$a*$c;
		return $x;
	}
	public function qu_equation($a, $b, $c){
		$x = $this->linear_equstion($b,$c);
		if($a == 0){
			return $this->linear_equstion($b,$c);
		}
		if ($x > 0) {
			return $this->X=array (
				-($b+sqrt($b**2-4*$a*$c)/2*$a),
				-($b-sqrt($b**2-4*$a*$c)/2*$a)
			);
		}
		if ($x == 0) {
			return $this->X=array(-($b/(2*$a)));
		}
		return $this->X=NULL;
	}
}
	$a = new A();
	$b = new B();
	
	
	?>
			