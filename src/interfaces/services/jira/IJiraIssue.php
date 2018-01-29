<?php
namespace deflou\interfaces\services\jira;

/**
 * Interface IJiraIssue
 * @package deflou\interfaces\services\jira
 * @author deflou.dev@gmail.com
 */
interface IJiraIssue
{
    const PRIORITY__HIGHEST_ID = 1;
    const PRIORITY__HIGHEST_TITLE = 'Высочайший';

    const PRIORITY__HIGH_ID = 2;
    const PRIORITY__HIGH_TITLE = 'Высокий';

    const PRIORITY__MEDIUM_ID = 3;
    const PRIORITY__MEDIUM_TITLE = 'Средний';

    const PRIORITY__LOW_ID = 4;
    const PRIORITY__LOW_TITLE = 'Низкий';

    const PRIORITY__LOWEST_ID = 5;
    const PRIORITY__LOWEST_TITLE = 'Самый низкий';
}
