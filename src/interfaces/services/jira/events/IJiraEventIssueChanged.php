<?php
namespace deflou\interfaces\servies\jira\events;

/**
 * Interface IJiraEventIssueChanged
 *
 * @package deflou\interfaces\servies\jira\events
 * @author deflou.dev@gmail.com
 */
interface IJiraEventIssueChanged
{
    const NAME = 'issue_changed';
    const TITLE = 'Тикет изменился';
    const DESCRIPTION = 'Событие происходит при изменении (обновлении) тикета';

    const PARAM__ISSUE_ID__NAME = 'issueId';
    const PARAM__ISSUE_ID__TITLE = 'ID задачи';
    const PARAM__ISSUE_ID__DESCRIPTION = 'Уникальный идентификатор задачи, например, 14309';

    const PARAM__ISSUE_KEY__NAME = 'issueKey';
    const PARAM__ISSUE_KEY__TITLE = 'Номер задачи';
    const PARAM__ISSUE_KEY__DESCRIPTION = 'Проектный номер задачи, например, MY-901';

    const PARAM__PRIORITY__NAME = 'priorityName';
    const PARAM__PRIORITY__TITLE = 'Приоритет';
    const PARAM__PRIORITY__DESCRIPTION = 'Приоритет задачи';

    const PARAM__LABELS__NAME = 'labels';
    const PARAM__LABELS__TITLE = 'Теги';
    const PARAM__LABELS__DESCRIPTION = 'Теги, метки задачи';

    const PARAM__ASSIGNEE__NAME = 'assigneeName';
    const PARAM__ASSIGNEE__TITLE = 'Назначена';
    const PARAM__ASSIGNEE__DESCRIPTION = 'Пользователь, на которого назначена задача';

    const PARAM__STATUS__NAME = 'statusName';
    const PARAM__STATUS__TITLE = 'Статус';
    const PARAM__STATUS__DESCRIPTION = 'Статус задачи';

    const PARAM__COMMENTS__NAME = 'comments';
    const PARAM__COMMENTS__TITLE = 'Комментарии';
    const PARAM__COMMENTS__DESCRIPTION = 'Комментарии к задаче';

    const PARAM__SUMMARY__NAME = 'summary';
    const PARAM__SUMMARY__TITLE = 'Заголовок';
    const PARAM__SUMMARY__DESCRIPTION = 'Заголовок задачи, т.е. краткое описание';

    const PARAM__DESCRIPTION__NAME = 'description';
    const PARAM__DESCRIPTION__TITLE = 'Описание';
    const PARAM__DESCRIPTION__DESCRIPTION = 'Подробное описание задачи';

    const PARAM__PROJECT__NAME = 'projectName';
    const PARAM__PROJECT__TITLE = 'Название проекта';
    const PARAM__PROJECT__DESCRIPTION = 'Уникальное название проекта, например, MyProject';

    const PARAM__PROJECT_KEY__NAME = 'projectKey';
    const PARAM__PROJECT_KEY__TITLE = 'Ключ проекта';
    const PARAM__PROJECT_KEY__DESCRIPTION = 'Ключ проекта, является префиксом для ключа тикета, например, MY';
}
