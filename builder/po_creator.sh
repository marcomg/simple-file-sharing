#!/bin/bash
# xgettext --language=PHP -n --from-code=UTF-8 script/*

template_dir='../template/templates';
for file in $(ls $template_dir) ; do
	files="$files $template_dir/$file";
done
echo '<?php' > templatest.tmp
php tsmarty2c.php $files >> templatest.tmp
echo '?>' >> templatest.tmp

xgettext --language=PHP --no-location --keyword=T_ --from-code=UTF-8 ../script/* templatest.tmp

rm templatest.tmp
