<?php
namespace SCW\Skin;

class Loader {

	/**
	 * 
	 * @return multitype:\SCW\Skin\SCW\Skin
	 */
	public function load() {
		return array(
			new \SCW\Skin('https://lh3.ggpht.com/kAHJ4eP4LsZV_uNEK68_BqSR9aY8Iium2aCdgaXcRLB9pRI7VIqe-l3CSTcJ2qu7_Rw', 'Holo', '', ''),
			new \SCW\Skin('https://lh5.ggpht.com/C454tHiuOIoqh8cPPb5-l36JzxnwWD3ifdzdEqpGZ4WsgXanwJnuFdsDOMwcv162zQ', 'SiMi Shadow Multiple', '', '')
		);
	}
}