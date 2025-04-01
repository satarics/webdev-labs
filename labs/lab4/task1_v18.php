<?php
\$str = "r1ab rxyzr r9fgr rtttr rabr r123r";
preg_match_all("/r...r/", \$str, \$matches);
print_r(\$matches[0]);
?>
