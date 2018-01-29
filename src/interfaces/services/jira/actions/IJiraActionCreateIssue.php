<?php
namespace deflou\interfaces\services\jira\actions;

/**
 * Interface IJiraActionCreateIssue
 *
 * @package deflou\interfaces\services\jira\actions
 * @author deflou.dev@gmail.com
 */
interface IJiraActionCreateIssue
{
    const NAME = 'create_issue';
    const TITLE = 'Создание задачи';
    const DESCRIPTION = 'Уведомление о создании задачи';

    const PARAM__PROJECT__NAME = 'project';
    const PARAM__PROJECT__TITLE = 'ID проекта';
    const PARAM__PROJECT__DESCRIPTION = 'Проект, в котором необходимо создать задачу';

    const PARAM__SUMMARY__NAME = 'summary';
    const PARAM__SUMMARY__TITLE = 'Заголовок задачи';
    const PARAM__SUMMARY__DESCRIPTION = 'Краткое описание задачи';

    const PARAM__DESCRIPTION__NAME = 'description';
    const PARAM__DESCRIPTION__TITLE = 'Содержание задачи';
    const PARAM__DESCRIPTION__DESCRIPTION = 'Подробное описание задачи';

    const PARAM__ISSUE_TYPE___NAME = 'issuetype';
    const PARAM__ISSUE_TYPE__TITLE = 'Тип задачи';
    const PARAM__ISSUE_TYPE__DESCRIPTION = 'Тип задачи (баг, стори, т.п.). Внимание: типы могут повторяться, '
                                    . 'если в нескольких проектах есть одноимённые типы, имеющие в виду разное';

    const PARAM__LABELS__NAME = 'labels';
    const PARAM__LABELS__TITLE = 'Теги';
    const PARAM__LABELS__DESCRIPTION = 'Теги, метки - указываются через запятую';

    const PARAM__PRIORITY__NAME = 'priority';
    const PARAM__PRIORITY__TITLE = 'Приоритет';
    const PARAM__PRIORITY__DESCRIPTION = 'Приоритет задачи';

    const PARAM__CUSTOM__NAME = 'custom';
    const PARAM__CUSTOM__TITLE = 'Специальные поля';
    const PARAM__CUSTOM__DESCRIPTION = 'Поля, специфичные для выбранного проекта. Само это поле не отображается';
}
