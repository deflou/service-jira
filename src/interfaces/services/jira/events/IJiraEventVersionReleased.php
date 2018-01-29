<?php
namespace deflou\interfaces\servies\jira\events;

/**
 * Interface IJiraEventVersionReleased
 *
 * @package deflou\interfaces\servies\jira\events
 * @author deflou.dev@gmail.com
 */
interface IJiraEventVersionReleased
{
    const NAME = 'version_released';
    const TITLE = 'Версия зарелизена';
    const DESCRIPTION = 'Произошёл релиз версии. Для данного события обязательно указывать фильтр по проекту';

    const PARAM__ID__NAME = 'id';
    const PARAM__ID__TITLE = 'ID версии';
    const PARAM__ID__DESCRIPTION = 'Уникальный в рамках Jira идентификатор версии, например, 14309';

    const PARAM__PROJECT__NAME = 'projectId';
    const PARAM__PROJECT__TITLE = 'ID проекта';
    const PARAM__PROJECT__DESCRIPTION = 'Идентификатор проекта, в котором прошёл релиз версии';

    const PARAM__VERSION__NAME = 'name';
    const PARAM__VERSION__TITLE = 'Версия';
    const PARAM__VERSION__DESCRIPTION = 'Номер версии, например, 1.0.2';

    const PARAM__DESCRIPTION__NAME = 'description';
    const PARAM__DESCRIPTION__TITLE = 'Описание релиза';
    const PARAM__DESCRIPTION__DESCRIPTION = 'Краткое описание релиза';
}
