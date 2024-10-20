<?php
return array (
  0 => 
  array (
    'name' => 'AWS CodeBuild',
    'constant' => 'CODEBUILD',
    'env' => 'CODEBUILD_BUILD_ARN',
  ),
  1 => 
  array (
    'name' => 'Agola CI',
    'constant' => 'AGOLA',
    'env' => 'AGOLA_GIT_REF',
    'pr' => 'AGOLA_PULL_REQUEST_ID',
  ),
  2 => 
  array (
    'name' => 'AppVeyor',
    'constant' => 'APPVEYOR',
    'env' => 'APPVEYOR',
    'pr' => 'APPVEYOR_PULL_REQUEST_NUMBER',
  ),
  3 => 
  array (
    'name' => 'Appcircle',
    'constant' => 'APPCIRCLE',
    'env' => 'AC_APPCIRCLE',
  ),
  4 => 
  array (
    'name' => 'Azure Pipelines',
    'constant' => 'AZURE_PIPELINES',
    'env' => 'TF_BUILD',
    'pr' => 
    array (
      'BUILD_REASON' => 'PullRequest',
    ),
  ),
  5 => 
  array (
    'name' => 'Bamboo',
    'constant' => 'BAMBOO',
    'env' => 'bamboo_planKey',
  ),
  6 => 
  array (
    'name' => 'Bitbucket Pipelines',
    'constant' => 'BITBUCKET',
    'env' => 'BITBUCKET_COMMIT',
    'pr' => 'BITBUCKET_PR_ID',
  ),
  7 => 
  array (
    'name' => 'Bitrise',
    'constant' => 'BITRISE',
    'env' => 'BITRISE_IO',
    'pr' => 'BITRISE_PULL_REQUEST',
  ),
  8 => 
  array (
    'name' => 'Buddy',
    'constant' => 'BUDDY',
    'env' => 'BUDDY_WORKSPACE_ID',
    'pr' => 'BUDDY_EXECUTION_PULL_REQUEST_ID',
  ),
  9 => 
  array (
    'name' => 'Buildkite',
    'constant' => 'BUILDKITE',
    'env' => 'BUILDKITE',
    'pr' => 
    array (
      'env' => 'BUILDKITE_PULL_REQUEST',
      'ne' => 'false',
    ),
  ),
  10 => 
  array (
    'name' => 'CircleCI',
    'constant' => 'CIRCLE',
    'env' => 'CIRCLECI',
    'pr' => 'CIRCLE_PULL_REQUEST',
  ),
  11 => 
  array (
    'name' => 'Cirrus CI',
    'constant' => 'CIRRUS',
    'env' => 'CIRRUS_CI',
    'pr' => 'CIRRUS_PR',
  ),
  12 => 
  array (
    'name' => 'Codefresh',
    'constant' => 'CODEFRESH',
    'env' => 'CF_BUILD_ID',
    'pr' => 
    array (
      'any' => 
      array (
        0 => 'CF_PULL_REQUEST_NUMBER',
        1 => 'CF_PULL_REQUEST_ID',
      ),
    ),
  ),
  13 => 
  array (
    'name' => 'Codemagic',
    'constant' => 'CODEMAGIC',
    'env' => 'CM_BUILD_ID',
    'pr' => 'CM_PULL_REQUEST',
  ),
  14 => 
  array (
    'name' => 'Codeship',
    'constant' => 'CODESHIP',
    'env' => 
    array (
      'CI_NAME' => 'codeship',
    ),
  ),
  15 => 
  array (
    'name' => 'Drone',
    'constant' => 'DRONE',
    'env' => 'DRONE',
    'pr' => 
    array (
      'DRONE_BUILD_EVENT' => 'pull_request',
    ),
  ),
  16 => 
  array (
    'name' => 'Earthly',
    'constant' => 'EARTHLY',
    'env' => 'EARTHLY_CI',
  ),
  17 => 
  array (
    'name' => 'Expo Application Services',
    'constant' => 'EAS',
    'env' => 'EAS_BUILD',
  ),
  18 => 
  array (
    'name' => 'Gerrit',
    'constant' => 'GERRIT',
    'env' => 'GERRIT_PROJECT',
  ),
  19 => 
  array (
    'name' => 'GitHub Actions',
    'constant' => 'GITHUB_ACTIONS',
    'env' => 'GITHUB_ACTIONS',
    'pr' => 
    array (
      'GITHUB_EVENT_NAME' => 'pull_request',
    ),
  ),
  20 => 
  array (
    'name' => 'GitLab CI',
    'constant' => 'GITLAB',
    'env' => 'GITLAB_CI',
    'pr' => 'CI_MERGE_REQUEST_ID',
  ),
  21 => 
  array (
    'name' => 'Gitea Actions',
    'constant' => 'GITEA_ACTIONS',
    'env' => 'GITEA_ACTIONS',
  ),
  22 => 
  array (
    'name' => 'GoCD',
    'constant' => 'GOCD',
    'env' => 'GO_PIPELINE_LABEL',
  ),
  23 => 
  array (
    'name' => 'Google Cloud Build',
    'constant' => 'GOOGLE_CLOUD_BUILD',
    'env' => 'BUILDER_OUTPUT',
  ),
  24 => 
  array (
    'name' => 'Harness CI',
    'constant' => 'HARNESS',
    'env' => 'HARNESS_BUILD_ID',
  ),
  25 => 
  array (
    'name' => 'Heroku',
    'constant' => 'HEROKU',
    'env' => 
    array (
      'env' => 'NODE',
      'includes' => '/app/.heroku/node/bin/node',
    ),
  ),
  26 => 
  array (
    'name' => 'Hudson',
    'constant' => 'HUDSON',
    'env' => 'HUDSON_URL',
  ),
  27 => 
  array (
    'name' => 'Jenkins',
    'constant' => 'JENKINS',
    'env' => 
    array (
      0 => 'JENKINS_URL',
      1 => 'BUILD_ID',
    ),
    'pr' => 
    array (
      'any' => 
      array (
        0 => 'ghprbPullId',
        1 => 'CHANGE_ID',
      ),
    ),
  ),
  28 => 
  array (
    'name' => 'LayerCI',
    'constant' => 'LAYERCI',
    'env' => 'LAYERCI',
    'pr' => 'LAYERCI_PULL_REQUEST',
  ),
  29 => 
  array (
    'name' => 'Magnum CI',
    'constant' => 'MAGNUM',
    'env' => 'MAGNUM',
  ),
  30 => 
  array (
    'name' => 'Netlify CI',
    'constant' => 'NETLIFY',
    'env' => 'NETLIFY',
    'pr' => 
    array (
      'env' => 'PULL_REQUEST',
      'ne' => 'false',
    ),
  ),
  31 => 
  array (
    'name' => 'Nevercode',
    'constant' => 'NEVERCODE',
    'env' => 'NEVERCODE',
    'pr' => 
    array (
      'env' => 'NEVERCODE_PULL_REQUEST',
      'ne' => 'false',
    ),
  ),
  32 => 
  array (
    'name' => 'Prow',
    'constant' => 'PROW',
    'env' => 'PROW_JOB_ID',
  ),
  33 => 
  array (
    'name' => 'ReleaseHub',
    'constant' => 'RELEASEHUB',
    'env' => 'RELEASE_BUILD_ID',
  ),
  34 => 
  array (
    'name' => 'Render',
    'constant' => 'RENDER',
    'env' => 'RENDER',
    'pr' => 
    array (
      'IS_PULL_REQUEST' => 'true',
    ),
  ),
  35 => 
  array (
    'name' => 'Sail CI',
    'constant' => 'SAIL',
    'env' => 'SAILCI',
    'pr' => 'SAIL_PULL_REQUEST_NUMBER',
  ),
  36 => 
  array (
    'name' => 'Screwdriver',
    'constant' => 'SCREWDRIVER',
    'env' => 'SCREWDRIVER',
    'pr' => 
    array (
      'env' => 'SD_PULL_REQUEST',
      'ne' => 'false',
    ),
  ),
  37 => 
  array (
    'name' => 'Semaphore',
    'constant' => 'SEMAPHORE',
    'env' => 'SEMAPHORE',
    'pr' => 'PULL_REQUEST_NUMBER',
  ),
  38 => 
  array (
    'name' => 'Sourcehut',
    'constant' => 'SOURCEHUT',
    'env' => 
    array (
      'CI_NAME' => 'sourcehut',
    ),
  ),
  39 => 
  array (
    'name' => 'Strider CD',
    'constant' => 'STRIDER',
    'env' => 'STRIDER',
  ),
  40 => 
  array (
    'name' => 'TaskCluster',
    'constant' => 'TASKCLUSTER',
    'env' => 
    array (
      0 => 'TASK_ID',
      1 => 'RUN_ID',
    ),
  ),
  41 => 
  array (
    'name' => 'TeamCity',
    'constant' => 'TEAMCITY',
    'env' => 'TEAMCITY_VERSION',
  ),
  42 => 
  array (
    'name' => 'Travis CI',
    'constant' => 'TRAVIS',
    'env' => 'TRAVIS',
    'pr' => 
    array (
      'env' => 'TRAVIS_PULL_REQUEST',
      'ne' => 'false',
    ),
  ),
  43 => 
  array (
    'name' => 'Vela',
    'constant' => 'VELA',
    'env' => 'VELA',
    'pr' => 
    array (
      'VELA_PULL_REQUEST' => '1',
    ),
  ),
  44 => 
  array (
    'name' => 'Vercel',
    'constant' => 'VERCEL',
    'env' => 
    array (
      'any' => 
      array (
        0 => 'NOW_BUILDER',
        1 => 'VERCEL',
      ),
    ),
    'pr' => 'VERCEL_GIT_PULL_REQUEST_ID',
  ),
  45 => 
  array (
    'name' => 'Visual Studio App Center',
    'constant' => 'APPCENTER',
    'env' => 'APPCENTER_BUILD_ID',
  ),
  46 => 
  array (
    'name' => 'Woodpecker',
    'constant' => 'WOODPECKER',
    'env' => 
    array (
      'CI' => 'woodpecker',
    ),
    'pr' => 
    array (
      'CI_BUILD_EVENT' => 'pull_request',
    ),
  ),
  47 => 
  array (
    'name' => 'Xcode Cloud',
    'constant' => 'XCODE_CLOUD',
    'env' => 'CI_XCODE_PROJECT',
    'pr' => 'CI_PULL_REQUEST_NUMBER',
  ),
  48 => 
  array (
    'name' => 'Xcode Server',
    'constant' => 'XCODE_SERVER',
    'env' => 'XCS',
  ),
  49 => 
  array (
    'name' => 'dsari',
    'constant' => 'DSARI',
    'env' => 'DSARI',
  ),
);
