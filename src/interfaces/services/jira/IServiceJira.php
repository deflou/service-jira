<?php
namespace deflou\interfaces\servies\jira;

interface IServiceJira
{
    const CONFIG__OPTION_BASE_URL = 'url';
    const CONFIG__OPTION_API_URL = 'url';
    const CONFIG__OPTION_CREATE_TASK_URL = self::CONFIG__OPTION_API_URL . '/issue';

    const CONFIG__OPTION_LOGIN = 'login';
    const CONFIG__OPTION_PASSWORD = 'password';
}
