<?php

/**
 * General info
 */
use deflou\interfaces\services\IServiceConfig as Schema;
use deflou\interfaces\servies\jira\IServiceJira as JiraSchema;
use deflou\interfaces\services\jira\IJiraIssue as Issue;

/**
 * Actions
 */
use deflou\interfaces\services\jira\actions\IJiraActionCreateIssue as CreateIssue;

/**
 * Events
 */
use deflou\interfaces\servies\jira\events\IJiraEventVersionReleased as VersionReleased;
use deflou\interfaces\servies\jira\events\IJiraEventIssueChanged as IssueChanged;

/**
 * Compares
 */
use deflou\components\compares\CompareVersion;
use deflou\components\services\jira\compares\ComparePriority;
use deflou\components\services\jira\compares\CompareLabels;

return [
    Schema::CONFIG__ROOT => [
        Schema::CONFIG__NAME => 'jira',
        Schema::CONFIG__TITLE => 'Jira Atlassian',
        Schema::CONFIG__DESCRIPTION => 'Task tracker',
        Schema::CONFIG__SERVICE_RESOLVER => \deflou\components\services\jira\Resolver::class,
        Schema::CONFIG__SERVICE_VERSION => '1.0.0',
        Schema::CONFIG__SERVICE_AUTHORS => [
            [
                "name" => "DeFlou developer",
                "email" => "deflou.dev@gmail.com"
            ]
        ],
        Schema::CONFIG__SERVICE_OPTIONS => [
            [
                Schema::CONFIG__NAME => JiraSchema::CONFIG__OPTION_BASE_URL,
                Schema::CONFIG__TITLE => 'Base URL',
                Schema::CONFIG__DESCRIPTION => 'Base Jira URL, ex.: https://my.jira'
            ],
            [
                Schema::CONFIG__NAME => JiraSchema::CONFIG__OPTION_API_URL,
                Schema::CONFIG__TITLE => 'API URL',
                Schema::CONFIG__DESCRIPTION => 'Jira API URL, ex.: https://my.jira/rest/api/2'
            ],
            [
                Schema::CONFIG__NAME => JiraSchema::CONFIG__OPTION_LOGIN,
                Schema::CONFIG__TITLE => 'Login',
                Schema::CONFIG__DESCRIPTION => 'Jira user login for authorizing, ex.: myjiralogin'
            ],
            [
                Schema::CONFIG__NAME => JiraSchema::CONFIG__OPTION_PASSWORD,
                Schema::CONFIG__TITLE => 'Password',
                Schema::CONFIG__DESCRIPTION => 'Password for Jira login for authorizing, ex.: qwerty123'
            ],
        ],
        Schema::CONFIG__SERVICE_EVENTS => [
            [
                Schema::CONFIG__NAME => VersionReleased::NAME,
                Schema::CONFIG__TITLE => VersionReleased::TITLE,
                Schema::CONFIG__DESCRIPTION => VersionReleased::DESCRIPTION,
                Schema::CONFIG__SERVICE_EVENT_PARAMETERS => [
                    [
                        Schema::CONFIG__NAME => VersionReleased::PARAM__ID__NAME,
                        Schema::CONFIG__TITLE => VersionReleased::PARAM__ID__TITLE,
                        Schema::CONFIG__DESCRIPTION => VersionReleased::PARAM__ID__DESCRIPTION,
                        Schema::CONFIG__PARAM_COMPARES => [
                            Schema::COMPARE__EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__NOT_EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__GREATER => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__LOWER => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__LIKE => Schema::COMPARE__DEFAULT,
                        ]
                    ],
                    [
                        Schema::CONFIG__NAME => VersionReleased::PARAM__VERSION__NAME,
                        Schema::CONFIG__TITLE => VersionReleased::PARAM__VERSION__TITLE,
                        Schema::CONFIG__DESCRIPTION => VersionReleased::PARAM__VERSION__DESCRIPTION,
                        Schema::CONFIG__PARAM_COMPARES => [
                            Schema::COMPARE__EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__NOT_EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__GREATER => CompareVersion::class,
                            Schema::COMPARE__LOWER => CompareVersion::class,
                            Schema::COMPARE__LIKE => Schema::COMPARE__DEFAULT,
                        ]
                    ],
                    [
                        Schema::CONFIG__NAME => VersionReleased::PARAM__DESCRIPTION__NAME,
                        Schema::CONFIG__TITLE => VersionReleased::PARAM__DESCRIPTION__TITLE,
                        Schema::CONFIG__DESCRIPTION => VersionReleased::PARAM__DESCRIPTION__DESCRIPTION,
                        Schema::CONFIG__PARAM_COMPARES => [
                            Schema::COMPARE__EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__NOT_EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__LIKE => Schema::COMPARE__DEFAULT,
                        ]
                    ],
                    [
                        Schema::CONFIG__NAME => VersionReleased::PARAM__PROJECT__NAME,
                        Schema::CONFIG__TITLE => VersionReleased::PARAM__PROJECT__TITLE,
                        Schema::CONFIG__DESCRIPTION => VersionReleased::PARAM__PROJECT__DESCRIPTION,
                        Schema::CONFIG__PARAM_COMPARES => [
                            Schema::COMPARE__EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__NOT_EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__LIKE => Schema::COMPARE__DEFAULT,
                        ],
                        Schema::CONFIG__PARAM_VALUE => [
                            Schema::CONFIG__PARAM_VALUE__CLASS =>
                                \deflou\components\services\jira\values\ValueProjectsList::class
                        ]
                    ],
                ],
                Schema::CONFIG__SERVICE_EVENT_DISPATCHERS => [
                    \deflou\components\services\jira\dispatchers\JiraDispatcherVersionInfo::class => []
                ]
            ],
            [
                Schema::CONFIG__NAME => IssueChanged::NAME,
                Schema::CONFIG__TITLE => IssueChanged::TITLE,
                Schema::CONFIG__DESCRIPTION => IssueChanged::DESCRIPTION,
                Schema::CONFIG__SERVICE_EVENT_PARAMETERS => [
                    [
                        Schema::CONFIG__NAME => IssueChanged::PARAM__ISSUE_ID__NAME,
                        Schema::CONFIG__TITLE => IssueChanged::PARAM__ISSUE_ID__TITLE,
                        Schema::CONFIG__DESCRIPTION => IssueChanged::PARAM__ISSUE_ID__DESCRIPTION,
                        Schema::CONFIG__PARAM_COMPARES => [
                            Schema::COMPARE__EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__NOT_EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__GREATER => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__LOWER => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__LIKE => Schema::COMPARE__DEFAULT,
                        ]
                    ],
                    [
                        Schema::CONFIG__NAME => IssueChanged::PARAM__ISSUE_KEY__NAME,
                        Schema::CONFIG__TITLE => IssueChanged::PARAM__ISSUE_KEY__TITLE,
                        Schema::CONFIG__DESCRIPTION => IssueChanged::PARAM__ISSUE_KEY__DESCRIPTION,
                        Schema::CONFIG__PARAM_COMPARES => [
                            Schema::COMPARE__EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__NOT_EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__LIKE => Schema::COMPARE__DEFAULT,
                        ]
                    ],
                    [
                        Schema::CONFIG__NAME => IssueChanged::PARAM__PRIORITY__NAME,
                        Schema::CONFIG__TITLE => IssueChanged::PARAM__PRIORITY__TITLE,
                        Schema::CONFIG__DESCRIPTION => IssueChanged::PARAM__PRIORITY__DESCRIPTION,
                        Schema::CONFIG__PARAM_COMPARES => [
                            Schema::COMPARE__EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__NOT_EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__GREATER => ComparePriority::class,
                            Schema::COMPARE__LOWER => ComparePriority::class,
                            Schema::COMPARE__LIKE => Schema::COMPARE__DEFAULT,
                        ]
                    ],
                    [
                        Schema::CONFIG__NAME => IssueChanged::PARAM__LABELS__NAME,
                        Schema::CONFIG__TITLE => IssueChanged::PARAM__LABELS__TITLE,
                        Schema::CONFIG__DESCRIPTION => IssueChanged::PARAM__LABELS__DESCRIPTION,
                        Schema::CONFIG__PARAM_COMPARES => [
                            Schema::COMPARE__EQUAL => CompareLabels::class,
                            Schema::COMPARE__NOT_EQUAL => CompareLabels::class,
                            Schema::COMPARE__LIKE => CompareLabels::class,
                        ]
                    ],
                    [
                        Schema::CONFIG__NAME => IssueChanged::PARAM__ASSIGNEE__NAME,
                        Schema::CONFIG__TITLE => IssueChanged::PARAM__ASSIGNEE__TITLE,
                        Schema::CONFIG__DESCRIPTION => IssueChanged::PARAM__ASSIGNEE__TITLE,
                        Schema::CONFIG__PARAM_COMPARES => [
                            Schema::COMPARE__EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__NOT_EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__LIKE => Schema::COMPARE__DEFAULT,
                        ]
                    ],
                    [
                        Schema::CONFIG__NAME => IssueChanged::PARAM__STATUS__NAME,
                        Schema::CONFIG__TITLE => IssueChanged::PARAM__STATUS__TITLE,
                        Schema::CONFIG__DESCRIPTION => IssueChanged::PARAM__STATUS__DESCRIPTION,
                        Schema::CONFIG__PARAM_COMPARES => [
                            Schema::COMPARE__EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__NOT_EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__LIKE => Schema::COMPARE__DEFAULT,
                        ]
                    ],
                    [
                        Schema::CONFIG__NAME => IssueChanged::PARAM__COMMENTS__NAME,
                        Schema::CONFIG__TITLE => IssueChanged::PARAM__COMMENTS__TITLE,
                        Schema::CONFIG__DESCRIPTION => IssueChanged::PARAM__COMMENTS__DESCRIPTION,
                        Schema::CONFIG__PARAM_COMPARES => [
                            Schema::COMPARE__EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__NOT_EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__LIKE => Schema::COMPARE__DEFAULT,
                        ]
                    ],
                    [
                        Schema::CONFIG__NAME => IssueChanged::PARAM__SUMMARY__NAME,
                        Schema::CONFIG__TITLE => IssueChanged::PARAM__SUMMARY__TITLE,
                        Schema::CONFIG__DESCRIPTION => IssueChanged::PARAM__STATUS__DESCRIPTION,
                        Schema::CONFIG__PARAM_COMPARES => [
                            Schema::COMPARE__EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__NOT_EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__LIKE => Schema::COMPARE__DEFAULT,
                        ]
                    ],
                    [
                        Schema::CONFIG__NAME => IssueChanged::PARAM__DESCRIPTION__NAME,
                        Schema::CONFIG__TITLE => IssueChanged::PARAM__DESCRIPTION__TITLE,
                        Schema::CONFIG__DESCRIPTION => IssueChanged::PARAM__DESCRIPTION__DESCRIPTION,
                        Schema::CONFIG__PARAM_COMPARES => [
                            Schema::COMPARE__EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__NOT_EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__LIKE => Schema::COMPARE__DEFAULT,
                        ]
                    ],
                    [
                        Schema::CONFIG__NAME => IssueChanged::PARAM__PROJECT__NAME,
                        Schema::CONFIG__TITLE => IssueChanged::PARAM__PROJECT__TITLE,
                        Schema::CONFIG__DESCRIPTION => IssueChanged::PARAM__PROJECT__DESCRIPTION,
                        Schema::CONFIG__PARAM_COMPARES => [
                            Schema::COMPARE__EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__NOT_EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__LIKE => Schema::COMPARE__DEFAULT,
                        ]
                    ],
                    [
                        Schema::CONFIG__NAME => IssueChanged::PARAM__PROJECT_KEY__NAME,
                        Schema::CONFIG__TITLE => IssueChanged::PARAM__PROJECT_KEY__TITLE,
                        Schema::CONFIG__DESCRIPTION => IssueChanged::PARAM__PROJECT_KEY__DESCRIPTION,
                        Schema::CONFIG__PARAM_COMPARES => [
                            Schema::COMPARE__EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__NOT_EQUAL => Schema::COMPARE__DEFAULT,
                            Schema::COMPARE__LIKE => Schema::COMPARE__DEFAULT,
                        ]
                    ]
                ],
                Schema::CONFIG__SERVICE_EVENT_DISPATCHERS => [
                    \deflou\components\services\jira\dispatchers\JiraDispatcherIssueInfo::class => []
                ]
            ]
        ],
        Schema::CONFIG__SERVICE_ACTIONS => [
            [
                Schema::CONFIG__NAME => CreateIssue::NAME,
                Schema::CONFIG__TITLE => CreateIssue::TITLE,
                Schema::CONFIG__DESCRIPTION => CreateIssue::DESCRIPTION,
                Schema::CONFIG__SERVICE_EVENT_PARAMETERS => [
                    [
                        Schema::CONFIG__NAME => CreateIssue::PARAM__PROJECT__NAME,
                        Schema::CONFIG__TITLE => CreateIssue::PARAM__PROJECT__TITLE,
                        Schema::CONFIG__DESCRIPTION => CreateIssue::PARAM__PROJECT__DESCRIPTION,
                        Schema::CONFIG__PARAM_VALUE => [
                            Schema::CONFIG__PARAM_VALUE__CLASS =>
                                \deflou\components\services\jira\values\ValueProjectsList::class
                        ]
                    ],
                    [
                        Schema::CONFIG__NAME => CreateIssue::PARAM__SUMMARY__NAME,
                        Schema::CONFIG__TITLE => CreateIssue::PARAM__SUMMARY__TITLE,
                        Schema::CONFIG__DESCRIPTION => CreateIssue::PARAM__SUMMARY__DESCRIPTION
                    ],
                    [
                        Schema::CONFIG__NAME => CreateIssue::PARAM__DESCRIPTION__NAME,
                        Schema::CONFIG__TITLE => CreateIssue::PARAM__DESCRIPTION__TITLE,
                        Schema::CONFIG__DESCRIPTION => CreateIssue::PARAM__DESCRIPTION__DESCRIPTION
                    ],
                    [
                        Schema::CONFIG__NAME => CreateIssue::PARAM__ISSUE_TYPE___NAME,
                        Schema::CONFIG__TITLE => CreateIssue::PARAM__ISSUE_TYPE__TITLE,
                        Schema::CONFIG__DESCRIPTION => CreateIssue::PARAM__ISSUE_TYPE__DESCRIPTION,
                        Schema::CONFIG__PARAM_VALUE => [
                            Schema::CONFIG__PARAM_VALUE__CLASS =>
                                \deflou\components\services\jira\values\ValueIssueTypesList::class
                        ]
                    ],
                    [
                        Schema::CONFIG__NAME => CreateIssue::PARAM__LABELS__NAME,
                        Schema::CONFIG__TITLE => CreateIssue::PARAM__LABELS__TITLE,
                        Schema::CONFIG__DESCRIPTION => CreateIssue::PARAM__LABELS__DESCRIPTION
                    ],
                    [
                        Schema::CONFIG__NAME => CreateIssue::PARAM__PRIORITY__NAME,
                        Schema::CONFIG__TITLE => CreateIssue::PARAM__PRIORITY__TITLE,
                        Schema::CONFIG__DESCRIPTION => CreateIssue::PARAM__PRIORITY__DESCRIPTION,
                        Schema::CONFIG__PARAM_VALUE => [
                            Schema::CONFIG__PARAM_VALUE__TYPE => Schema::CONFIG__VALUE_TYPE_SELECT,
                            Schema::CONFIG__PARAM_VALUE__VALUE => [
                                Issue::PRIORITY__HIGHEST_ID => Issue::PRIORITY__HIGHEST_TITLE,
                                Issue::PRIORITY__HIGH_ID => Issue::PRIORITY__HIGH_TITLE,
                                Issue::PRIORITY__MEDIUM_ID => Issue::PRIORITY__MEDIUM_TITLE,
                                Issue::PRIORITY__LOW_ID => Issue::PRIORITY__LOW_TITLE,
                                Issue::PRIORITY__LOWEST_ID => Issue::PRIORITY__LOWEST_TITLE,
                            ]
                        ]
                    ],
                ],
                Schema::CONFIG__SERVICE_EVENT_DISPATCHERS => []
            ]
        ],
    ]
];
