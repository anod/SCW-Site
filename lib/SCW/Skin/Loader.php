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
			new \SCW\Skin('https://lh5.ggpht.com/C454tHiuOIoqh8cPPb5-l36JzxnwWD3ifdzdEqpGZ4WsgXanwJnuFdsDOMwcv162zQ', 'SiMi Shadow Multiple', '', ''),
			new \SCW\Skin('https://lh4.ggpht.com/JXJxBhhpqk-CrFN14kSSJ2MwLJzpbOQtVY5seToYeqmT1nX2EHSzHoGDUhP6L85ysqk', 'SiMi Shadow', '', ''),
			new \SCW\Skin('https://lh6.ggpht.com/8uHD4ix27MJrmOuTPb69UaozIn6pq0IRBEz7OLjCIxmgEPhxOUgOztUoIn-jW1D2ulE', 'Glossy', '', ''),
			new \SCW\Skin('https://lh4.ggpht.com/fmVIX1STUxDo12f8Iw_QTWjSVWdTTC1htTYTOOOVhkpBm5b4mwqa0jPgUMNf2rISHQ', 'Sensitive Rounded ', '', '')
		);
	}
}