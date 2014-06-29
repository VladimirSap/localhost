




<!DOCTYPE html>
<html class="   ">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    <title>phpunit-selenium/PHPUnit/Extensions/SeleniumTestCase.php at master · sebastianbergmann/phpunit-selenium · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <meta property="fb:app_id" content="1401488693436528"/>

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="sebastianbergmann/phpunit-selenium" name="twitter:title" /><meta content="phpunit-selenium - Selenium RC integration for PHPUnit" name="twitter:description" /><meta content="https://avatars0.githubusercontent.com/u/25218?s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars0.githubusercontent.com/u/25218?s=400" property="og:image" /><meta content="sebastianbergmann/phpunit-selenium" property="og:title" /><meta content="https://github.com/sebastianbergmann/phpunit-selenium" property="og:url" /><meta content="phpunit-selenium - Selenium RC integration for PHPUnit" property="og:description" />

    <link rel="assets" href="https://github.global.ssl.fastly.net/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035/">
    <link rel="xhr-socket" href="/_sockets" />

    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="2E498DCE:2000:FC734E:53674CF3" name="octolytics-dimension-request_id" />
    

    
    
    <link rel="icon" type="image/x-icon" href="https://github.global.ssl.fastly.net/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="ZElFUTbGNR4kMMdnN0JVB7KH+6Y7lwMe8Se61bcl3UbGk75wMflSwp46XCq6DARyoJLNN8snzP13nnN6FpkheQ==" name="csrf-token" />

    <link href="https://github.global.ssl.fastly.net/assets/github-825241e13de547a733c8a9cc535c8f6b411b52c1.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://github.global.ssl.fastly.net/assets/github2-0c03a1f6ffa15e379ec26513a90980fce28e78d9.css" media="all" rel="stylesheet" type="text/css" />
    


        <script crossorigin="anonymous" src="https://github.global.ssl.fastly.net/assets/frameworks-2f6219cf5b1c2bab818848f5705fab73e1f57022.js" type="text/javascript"></script>
        <script async="async" crossorigin="anonymous" src="https://github.global.ssl.fastly.net/assets/github-ffd625cd257eca73d06fae2e942802116ee6f8d9.js" type="text/javascript"></script>
        
        
      <meta http-equiv="x-pjax-version" content="b4f9713470ec9d7f373e9d62bb53ec04">

      
  <meta name="description" content="phpunit-selenium - Selenium RC integration for PHPUnit" />

  <meta content="25218" name="octolytics-dimension-user_id" /><meta content="sebastianbergmann" name="octolytics-dimension-user_login" /><meta content="697111" name="octolytics-dimension-repository_id" /><meta content="sebastianbergmann/phpunit-selenium" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="697111" name="octolytics-dimension-repository_network_root_id" /><meta content="sebastianbergmann/phpunit-selenium" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/sebastianbergmann/phpunit-selenium/commits/master.atom" rel="alternate" title="Recent Commits to phpunit-selenium:master" type="application/atom+xml" />

  </head>


  <body class="logged_out  env-production windows vis-public page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>
    <div class="wrapper">
      
      
      
      


      
      <div class="header header-logged-out">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions">
        <a class="button primary" href="/join">Sign up</a>
      <a class="button signin" href="/login?return_to=%2Fsebastianbergmann%2Fphpunit-selenium%2Fblob%2Fmaster%2FPHPUnit%2FExtensions%2FSeleniumTestCase.php">Sign in</a>
    </div>

    <div class="command-bar js-command-bar  in-repository">

      <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
        <li class="features"><a href="/features">Features</a></li>
          <li class="enterprise"><a href="https://enterprise.github.com/">Enterprise</a></li>
          <li class="blog"><a href="/blog">Blog</a></li>
      </ul>
        <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<div class="commandbar">
  <span class="message"></span>
  <input type="text" data-hotkey="s, /" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    
      data-repo="sebastianbergmann/phpunit-selenium"
      data-branch="master"
      data-sha="02db2b24c3f407df41d3d19e49b9db3d824755a8"
  >
  <div class="display hidden"></div>
</div>

    <input type="hidden" name="nwo" value="sebastianbergmann/phpunit-selenium" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target" role="button" aria-haspopup="true">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container" aria-hidden="true">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="help tooltipped tooltipped-s" aria-label="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
    </div>

  </div>
</div>



      <div id="start-of-content" class="accessibility-aid"></div>
          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    <div id="js-flash-container">
      
    </div>
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        

<ul class="pagehead-actions">


  <li>
    <a href="/login?return_to=%2Fsebastianbergmann%2Fphpunit-selenium"
    class="minibutton with-count star-button tooltipped tooltipped-n"
    aria-label="You must be signed in to star a repository" rel="nofollow">
    <span class="octicon octicon-star"></span>Star
  </a>

    <a class="social-count js-social-count" href="/sebastianbergmann/phpunit-selenium/stargazers">
      310
    </a>

  </li>

    <li>
      <a href="/login?return_to=%2Fsebastianbergmann%2Fphpunit-selenium"
        class="minibutton with-count js-toggler-target fork-button tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-git-branch"></span>Fork
      </a>
      <a href="/sebastianbergmann/phpunit-selenium/network" class="social-count">
        160
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="repo-label"><span>public</span></span>
          <span class="mega-octicon octicon-repo"></span>
          <span class="author"><a href="/sebastianbergmann" class="url fn" itemprop="url" rel="author"><span itemprop="title">sebastianbergmann</span></a></span><!--
       --><span class="path-divider">/</span><!--
       --><strong><a href="/sebastianbergmann/phpunit-selenium" class="js-current-repository js-repo-home-link">phpunit-selenium</a></strong>

          <span class="page-context-loader">
            <img alt="Octocat-spinner-32" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline js-new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            

<div class="sunken-menu vertical-right repo-nav js-repo-nav js-repository-container-pjax js-octicon-loaders">
  <div class="sunken-menu-contents">
    <ul class="sunken-menu-group">
      <li class="tooltipped tooltipped-w" aria-label="Code">
        <a href="/sebastianbergmann/phpunit-selenium" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-hotkey="g c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /sebastianbergmann/phpunit-selenium">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped tooltipped-w" aria-label="Issues">
          <a href="/sebastianbergmann/phpunit-selenium/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g i" data-selected-links="repo_issues /sebastianbergmann/phpunit-selenium/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class='counter'>71</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped tooltipped-w" aria-label="Pull Requests">
        <a href="/sebastianbergmann/phpunit-selenium/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g p" data-selected-links="repo_pulls /sebastianbergmann/phpunit-selenium/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>4</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


    </ul>
    <div class="sunken-menu-separator"></div>
    <ul class="sunken-menu-group">

      <li class="tooltipped tooltipped-w" aria-label="Pulse">
        <a href="/sebastianbergmann/phpunit-selenium/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="pulse /sebastianbergmann/phpunit-selenium/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Graphs">
        <a href="/sebastianbergmann/phpunit-selenium/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_graphs repo_contributors /sebastianbergmann/phpunit-selenium/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Network">
        <a href="/sebastianbergmann/phpunit-selenium/network" aria-label="Network" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-selected-links="repo_network /sebastianbergmann/phpunit-selenium/network">
          <span class="octicon octicon-git-branch"></span> <span class="full-word">Network</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


  </div>
</div>

              <div class="only-with-full-nav">
                

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><strong>HTTPS</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/sebastianbergmann/phpunit-selenium.git" readonly="readonly">
    <span class="url-box-clippy">
    <button aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/sebastianbergmann/phpunit-selenium.git" data-copied-hint="copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><strong>Subversion</strong> checkout URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/sebastianbergmann/phpunit-selenium" readonly="readonly">
    <span class="url-box-clippy">
    <button aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/sebastianbergmann/phpunit-selenium" data-copied-hint="copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <span class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <a href="https://help.github.com/articles/which-remote-url-should-i-use">
    <span class="octicon octicon-question"></span>
    </a>
  </span>
</p>


  <a href="http://windows.github.com" class="minibutton sidebar-button" title="Save sebastianbergmann/phpunit-selenium to your computer and use it in GitHub Desktop." aria-label="Save sebastianbergmann/phpunit-selenium to your computer and use it in GitHub Desktop.">
    <span class="octicon octicon-device-desktop"></span>
    Clone in Desktop
  </a>

                <a href="/sebastianbergmann/phpunit-selenium/archive/master.zip"
                   class="minibutton sidebar-button"
                   aria-label="Download sebastianbergmann/phpunit-selenium as a zip file"
                   title="Download sebastianbergmann/phpunit-selenium as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          

<a href="/sebastianbergmann/phpunit-selenium/blob/a7401a04755dce41332a450b7111dd610caa3ace/PHPUnit/Extensions/SeleniumTestCase.php" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:7871f180a6ead3fa57ba68ecfbfa23db -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<a href="/sebastianbergmann/phpunit-selenium/find/master" data-pjax data-hotkey="t" class="js-show-file-finder" style="display:none">Show File Finder</a>

<div class="file-navigation">
  

<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-remove-close js-menu-close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/blob/1.0/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.0">1.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/blob/1.1/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.1">1.1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/blob/1.2/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.2">1.2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/blob/master/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.3.3/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.3.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.3.3">1.3.3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.3.2/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.3.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.3.2">1.3.2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.3.1/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.3.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.3.1">1.3.1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.3.0/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.3.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.3.0">1.3.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.2.12/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.2.12"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.2.12">1.2.12</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.2.11/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.2.11"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.2.11">1.2.11</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.2.10/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.2.10"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.2.10">1.2.10</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.2.9/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.2.9"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.2.9">1.2.9</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.2.8/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.2.8"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.2.8">1.2.8</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.2.7/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.2.7"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.2.7">1.2.7</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.2.6/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.2.6"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.2.6">1.2.6</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.2.5/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.2.5"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.2.5">1.2.5</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.2.4/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.2.4"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.2.4">1.2.4</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.2.3/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.2.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.2.3">1.2.3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.2.2/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.2.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.2.2">1.2.2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.2.1/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.2.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.2.1">1.2.1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.2.0/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.2.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.2.0">1.2.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.1.3/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.1.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.1.3">1.1.3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.1.2/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.1.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.1.2">1.1.2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.1.1/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.1.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.1.1">1.1.1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.1.0RC1/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.1.0RC1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.1.0RC1">1.1.0RC1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.1.0/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.1.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.1.0">1.1.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.0.3/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.0.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.0.3">1.0.3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.0.2/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.0.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.0.2">1.0.2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.0.1/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.0.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.0.1">1.0.1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.0.0beta1/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.0.0beta1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.0.0beta1">1.0.0beta1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.0.0RC2/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.0.0RC2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.0.0RC2">1.0.0RC2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.0.0RC1/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.0.0RC1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.0.0RC1">1.0.0RC1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sebastianbergmann/phpunit-selenium/tree/1.0.0/PHPUnit/Extensions/SeleniumTestCase.php"
                 data-name="1.0.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.0.0">1.0.0</a>
            </div> <!-- /.select-menu-item -->
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/sebastianbergmann/phpunit-selenium" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">phpunit-selenium</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/sebastianbergmann/phpunit-selenium/tree/master/PHPUnit" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">PHPUnit</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/sebastianbergmann/phpunit-selenium/tree/master/PHPUnit/Extensions" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">Extensions</span></a></span><span class="separator"> / </span><strong class="final-path">SeleniumTestCase.php</strong> <button aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="PHPUnit/Extensions/SeleniumTestCase.php" data-copied-hint="copied!" type="button"><span class="octicon octicon-clippy"></span></button>
  </div>
</div>


  <div class="commit file-history-tease">
    <img alt="Hugo Fonseca" class="main-avatar js-avatar" data-user="1098293" height="24" src="https://avatars2.githubusercontent.com/u/1098293?s=140" width="24" />
    <span class="author"><a href="/hugofonseca" rel="author">hugofonseca</a></span>
    <local-time datetime="2013-09-11T00:06:45+01:00" from="now" title-format="%Y-%m-%d %H:%M:%S %z" title="2013-09-11 00:06:45 +0100">September 11, 2013</local-time>
    <div class="commit-title">
        <a href="/sebastianbergmann/phpunit-selenium/commit/eae942af0e60d47cf4b8e34a285494b94992f64a" class="message" data-pjax="true" title="coding standards">coding standards</a>
    </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>12</strong>  contributors</a></p>
          <a class="avatar tooltipped tooltipped-s" aria-label="giorgiosironi" href="/sebastianbergmann/phpunit-selenium/commits/master/PHPUnit/Extensions/SeleniumTestCase.php?author=giorgiosironi"><img alt="Giorgio Sironi" class=" js-avatar" data-user="160299" height="20" src="https://avatars0.githubusercontent.com/u/160299?s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="sebastianbergmann" href="/sebastianbergmann/phpunit-selenium/commits/master/PHPUnit/Extensions/SeleniumTestCase.php?author=sebastianbergmann"><img alt="Sebastian Bergmann" class=" js-avatar" data-user="25218" height="20" src="https://avatars3.githubusercontent.com/u/25218?s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="KNXSebastian" href="/sebastianbergmann/phpunit-selenium/commits/master/PHPUnit/Extensions/SeleniumTestCase.php?author=KNXSebastian"><img alt="Sebastian" class=" js-avatar" data-user="1215573" height="20" src="https://avatars3.githubusercontent.com/u/1215573?s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="mattgibson" href="/sebastianbergmann/phpunit-selenium/commits/master/PHPUnit/Extensions/SeleniumTestCase.php?author=mattgibson"><img alt="Matt Gibson" class=" js-avatar" data-user="503900" height="20" src="https://avatars2.githubusercontent.com/u/503900?s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="emaks" href="/sebastianbergmann/phpunit-selenium/commits/master/PHPUnit/Extensions/SeleniumTestCase.php?author=emaks"><img alt="emaks" class=" js-avatar" data-user="1282000" height="20" src="https://avatars0.githubusercontent.com/u/1282000?s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="psemuu" href="/sebastianbergmann/phpunit-selenium/commits/master/PHPUnit/Extensions/SeleniumTestCase.php?author=psemuu"><img alt="psemuu" class=" js-avatar" data-user="1384565" height="20" src="https://avatars3.githubusercontent.com/u/1384565?s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="hugofonseca" href="/sebastianbergmann/phpunit-selenium/commits/master/PHPUnit/Extensions/SeleniumTestCase.php?author=hugofonseca"><img alt="Hugo Fonseca" class=" js-avatar" data-user="1098293" height="20" src="https://avatars2.githubusercontent.com/u/1098293?s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="jlipps" href="/sebastianbergmann/phpunit-selenium/commits/master/PHPUnit/Extensions/SeleniumTestCase.php?author=jlipps"><img alt="Jonathan Lipps" class=" js-avatar" data-user="605053" height="20" src="https://avatars3.githubusercontent.com/u/605053?s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="Maks3w" href="/sebastianbergmann/phpunit-selenium/commits/master/PHPUnit/Extensions/SeleniumTestCase.php?author=Maks3w"><img alt="Maks" class=" js-avatar" data-user="1301698" height="20" src="https://avatars3.githubusercontent.com/u/1301698?s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="daFish" href="/sebastianbergmann/phpunit-selenium/commits/master/PHPUnit/Extensions/SeleniumTestCase.php?author=daFish"><img alt="Marcus Stöhr" class=" js-avatar" data-user="150416" height="20" src="https://avatars3.githubusercontent.com/u/150416?s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="cebe" href="/sebastianbergmann/phpunit-selenium/commits/master/PHPUnit/Extensions/SeleniumTestCase.php?author=cebe"><img alt="Carsten Brandt" class=" js-avatar" data-user="189796" height="20" src="https://avatars2.githubusercontent.com/u/189796?s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="tot-ra" href="/sebastianbergmann/phpunit-selenium/commits/master/PHPUnit/Extensions/SeleniumTestCase.php?author=tot-ra"><img alt="Артём Курапов" class=" js-avatar" data-user="445122" height="20" src="https://avatars0.githubusercontent.com/u/445122?s=140" width="20" /></a>


    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
          <li class="facebox-user-list-item">
            <img alt="Giorgio Sironi" class=" js-avatar" data-user="160299" height="24" src="https://avatars0.githubusercontent.com/u/160299?s=140" width="24" />
            <a href="/giorgiosironi">giorgiosironi</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Sebastian Bergmann" class=" js-avatar" data-user="25218" height="24" src="https://avatars3.githubusercontent.com/u/25218?s=140" width="24" />
            <a href="/sebastianbergmann">sebastianbergmann</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Sebastian" class=" js-avatar" data-user="1215573" height="24" src="https://avatars3.githubusercontent.com/u/1215573?s=140" width="24" />
            <a href="/KNXSebastian">KNXSebastian</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Matt Gibson" class=" js-avatar" data-user="503900" height="24" src="https://avatars2.githubusercontent.com/u/503900?s=140" width="24" />
            <a href="/mattgibson">mattgibson</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="emaks" class=" js-avatar" data-user="1282000" height="24" src="https://avatars0.githubusercontent.com/u/1282000?s=140" width="24" />
            <a href="/emaks">emaks</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="psemuu" class=" js-avatar" data-user="1384565" height="24" src="https://avatars3.githubusercontent.com/u/1384565?s=140" width="24" />
            <a href="/psemuu">psemuu</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Hugo Fonseca" class=" js-avatar" data-user="1098293" height="24" src="https://avatars2.githubusercontent.com/u/1098293?s=140" width="24" />
            <a href="/hugofonseca">hugofonseca</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Jonathan Lipps" class=" js-avatar" data-user="605053" height="24" src="https://avatars3.githubusercontent.com/u/605053?s=140" width="24" />
            <a href="/jlipps">jlipps</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Maks" class=" js-avatar" data-user="1301698" height="24" src="https://avatars3.githubusercontent.com/u/1301698?s=140" width="24" />
            <a href="/Maks3w">Maks3w</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Marcus Stöhr" class=" js-avatar" data-user="150416" height="24" src="https://avatars3.githubusercontent.com/u/150416?s=140" width="24" />
            <a href="/daFish">daFish</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Carsten Brandt" class=" js-avatar" data-user="189796" height="24" src="https://avatars2.githubusercontent.com/u/189796?s=140" width="24" />
            <a href="/cebe">cebe</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Артём Курапов" class=" js-avatar" data-user="445122" height="24" src="https://avatars0.githubusercontent.com/u/445122?s=140" width="24" />
            <a href="/tot-ra">tot-ra</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file-box">
  <div class="file">
    <div class="meta clearfix">
      <div class="info file-name">
        <span class="icon"><b class="octicon octicon-file-text"></b></span>
        <span class="mode" title="File Mode">file</span>
        <span class="meta-divider"></span>
          <span>1209 lines (1115 sloc)</span>
          <span class="meta-divider"></span>
        <span>38.608 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
            <a class="minibutton tooltipped tooltipped-w"
               href="http://windows.github.com" aria-label="Open this file in GitHub for Windows">
                <span class="octicon octicon-device-desktop"></span> Open
            </a>
              <a class="minibutton disabled tooltipped tooltipped-w" href="#"
                 aria-label="You must be signed in to make or propose changes">Edit</a>
          <a href="/sebastianbergmann/phpunit-selenium/raw/master/PHPUnit/Extensions/SeleniumTestCase.php" class="button minibutton " id="raw-url">Raw</a>
            <a href="/sebastianbergmann/phpunit-selenium/blame/master/PHPUnit/Extensions/SeleniumTestCase.php" class="button minibutton js-update-url-with-hash">Blame</a>
          <a href="/sebastianbergmann/phpunit-selenium/commits/master/PHPUnit/Extensions/SeleniumTestCase.php" class="button minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->
          <a class="minibutton danger disabled empty-icon tooltipped tooltipped-w" href="#"
             aria-label="You must be signed in to make or propose changes">
          Delete
        </a>
      </div><!-- /.actions -->
    </div>
        <div class="blob-wrapper data type-php js-blob-data">
        <table class="file-code file-diff tab-size-8">
          <tr class="file-code-line">
            <td class="blob-line-nums">
              <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
<span id="L144" rel="#L144">144</span>
<span id="L145" rel="#L145">145</span>
<span id="L146" rel="#L146">146</span>
<span id="L147" rel="#L147">147</span>
<span id="L148" rel="#L148">148</span>
<span id="L149" rel="#L149">149</span>
<span id="L150" rel="#L150">150</span>
<span id="L151" rel="#L151">151</span>
<span id="L152" rel="#L152">152</span>
<span id="L153" rel="#L153">153</span>
<span id="L154" rel="#L154">154</span>
<span id="L155" rel="#L155">155</span>
<span id="L156" rel="#L156">156</span>
<span id="L157" rel="#L157">157</span>
<span id="L158" rel="#L158">158</span>
<span id="L159" rel="#L159">159</span>
<span id="L160" rel="#L160">160</span>
<span id="L161" rel="#L161">161</span>
<span id="L162" rel="#L162">162</span>
<span id="L163" rel="#L163">163</span>
<span id="L164" rel="#L164">164</span>
<span id="L165" rel="#L165">165</span>
<span id="L166" rel="#L166">166</span>
<span id="L167" rel="#L167">167</span>
<span id="L168" rel="#L168">168</span>
<span id="L169" rel="#L169">169</span>
<span id="L170" rel="#L170">170</span>
<span id="L171" rel="#L171">171</span>
<span id="L172" rel="#L172">172</span>
<span id="L173" rel="#L173">173</span>
<span id="L174" rel="#L174">174</span>
<span id="L175" rel="#L175">175</span>
<span id="L176" rel="#L176">176</span>
<span id="L177" rel="#L177">177</span>
<span id="L178" rel="#L178">178</span>
<span id="L179" rel="#L179">179</span>
<span id="L180" rel="#L180">180</span>
<span id="L181" rel="#L181">181</span>
<span id="L182" rel="#L182">182</span>
<span id="L183" rel="#L183">183</span>
<span id="L184" rel="#L184">184</span>
<span id="L185" rel="#L185">185</span>
<span id="L186" rel="#L186">186</span>
<span id="L187" rel="#L187">187</span>
<span id="L188" rel="#L188">188</span>
<span id="L189" rel="#L189">189</span>
<span id="L190" rel="#L190">190</span>
<span id="L191" rel="#L191">191</span>
<span id="L192" rel="#L192">192</span>
<span id="L193" rel="#L193">193</span>
<span id="L194" rel="#L194">194</span>
<span id="L195" rel="#L195">195</span>
<span id="L196" rel="#L196">196</span>
<span id="L197" rel="#L197">197</span>
<span id="L198" rel="#L198">198</span>
<span id="L199" rel="#L199">199</span>
<span id="L200" rel="#L200">200</span>
<span id="L201" rel="#L201">201</span>
<span id="L202" rel="#L202">202</span>
<span id="L203" rel="#L203">203</span>
<span id="L204" rel="#L204">204</span>
<span id="L205" rel="#L205">205</span>
<span id="L206" rel="#L206">206</span>
<span id="L207" rel="#L207">207</span>
<span id="L208" rel="#L208">208</span>
<span id="L209" rel="#L209">209</span>
<span id="L210" rel="#L210">210</span>
<span id="L211" rel="#L211">211</span>
<span id="L212" rel="#L212">212</span>
<span id="L213" rel="#L213">213</span>
<span id="L214" rel="#L214">214</span>
<span id="L215" rel="#L215">215</span>
<span id="L216" rel="#L216">216</span>
<span id="L217" rel="#L217">217</span>
<span id="L218" rel="#L218">218</span>
<span id="L219" rel="#L219">219</span>
<span id="L220" rel="#L220">220</span>
<span id="L221" rel="#L221">221</span>
<span id="L222" rel="#L222">222</span>
<span id="L223" rel="#L223">223</span>
<span id="L224" rel="#L224">224</span>
<span id="L225" rel="#L225">225</span>
<span id="L226" rel="#L226">226</span>
<span id="L227" rel="#L227">227</span>
<span id="L228" rel="#L228">228</span>
<span id="L229" rel="#L229">229</span>
<span id="L230" rel="#L230">230</span>
<span id="L231" rel="#L231">231</span>
<span id="L232" rel="#L232">232</span>
<span id="L233" rel="#L233">233</span>
<span id="L234" rel="#L234">234</span>
<span id="L235" rel="#L235">235</span>
<span id="L236" rel="#L236">236</span>
<span id="L237" rel="#L237">237</span>
<span id="L238" rel="#L238">238</span>
<span id="L239" rel="#L239">239</span>
<span id="L240" rel="#L240">240</span>
<span id="L241" rel="#L241">241</span>
<span id="L242" rel="#L242">242</span>
<span id="L243" rel="#L243">243</span>
<span id="L244" rel="#L244">244</span>
<span id="L245" rel="#L245">245</span>
<span id="L246" rel="#L246">246</span>
<span id="L247" rel="#L247">247</span>
<span id="L248" rel="#L248">248</span>
<span id="L249" rel="#L249">249</span>
<span id="L250" rel="#L250">250</span>
<span id="L251" rel="#L251">251</span>
<span id="L252" rel="#L252">252</span>
<span id="L253" rel="#L253">253</span>
<span id="L254" rel="#L254">254</span>
<span id="L255" rel="#L255">255</span>
<span id="L256" rel="#L256">256</span>
<span id="L257" rel="#L257">257</span>
<span id="L258" rel="#L258">258</span>
<span id="L259" rel="#L259">259</span>
<span id="L260" rel="#L260">260</span>
<span id="L261" rel="#L261">261</span>
<span id="L262" rel="#L262">262</span>
<span id="L263" rel="#L263">263</span>
<span id="L264" rel="#L264">264</span>
<span id="L265" rel="#L265">265</span>
<span id="L266" rel="#L266">266</span>
<span id="L267" rel="#L267">267</span>
<span id="L268" rel="#L268">268</span>
<span id="L269" rel="#L269">269</span>
<span id="L270" rel="#L270">270</span>
<span id="L271" rel="#L271">271</span>
<span id="L272" rel="#L272">272</span>
<span id="L273" rel="#L273">273</span>
<span id="L274" rel="#L274">274</span>
<span id="L275" rel="#L275">275</span>
<span id="L276" rel="#L276">276</span>
<span id="L277" rel="#L277">277</span>
<span id="L278" rel="#L278">278</span>
<span id="L279" rel="#L279">279</span>
<span id="L280" rel="#L280">280</span>
<span id="L281" rel="#L281">281</span>
<span id="L282" rel="#L282">282</span>
<span id="L283" rel="#L283">283</span>
<span id="L284" rel="#L284">284</span>
<span id="L285" rel="#L285">285</span>
<span id="L286" rel="#L286">286</span>
<span id="L287" rel="#L287">287</span>
<span id="L288" rel="#L288">288</span>
<span id="L289" rel="#L289">289</span>
<span id="L290" rel="#L290">290</span>
<span id="L291" rel="#L291">291</span>
<span id="L292" rel="#L292">292</span>
<span id="L293" rel="#L293">293</span>
<span id="L294" rel="#L294">294</span>
<span id="L295" rel="#L295">295</span>
<span id="L296" rel="#L296">296</span>
<span id="L297" rel="#L297">297</span>
<span id="L298" rel="#L298">298</span>
<span id="L299" rel="#L299">299</span>
<span id="L300" rel="#L300">300</span>
<span id="L301" rel="#L301">301</span>
<span id="L302" rel="#L302">302</span>
<span id="L303" rel="#L303">303</span>
<span id="L304" rel="#L304">304</span>
<span id="L305" rel="#L305">305</span>
<span id="L306" rel="#L306">306</span>
<span id="L307" rel="#L307">307</span>
<span id="L308" rel="#L308">308</span>
<span id="L309" rel="#L309">309</span>
<span id="L310" rel="#L310">310</span>
<span id="L311" rel="#L311">311</span>
<span id="L312" rel="#L312">312</span>
<span id="L313" rel="#L313">313</span>
<span id="L314" rel="#L314">314</span>
<span id="L315" rel="#L315">315</span>
<span id="L316" rel="#L316">316</span>
<span id="L317" rel="#L317">317</span>
<span id="L318" rel="#L318">318</span>
<span id="L319" rel="#L319">319</span>
<span id="L320" rel="#L320">320</span>
<span id="L321" rel="#L321">321</span>
<span id="L322" rel="#L322">322</span>
<span id="L323" rel="#L323">323</span>
<span id="L324" rel="#L324">324</span>
<span id="L325" rel="#L325">325</span>
<span id="L326" rel="#L326">326</span>
<span id="L327" rel="#L327">327</span>
<span id="L328" rel="#L328">328</span>
<span id="L329" rel="#L329">329</span>
<span id="L330" rel="#L330">330</span>
<span id="L331" rel="#L331">331</span>
<span id="L332" rel="#L332">332</span>
<span id="L333" rel="#L333">333</span>
<span id="L334" rel="#L334">334</span>
<span id="L335" rel="#L335">335</span>
<span id="L336" rel="#L336">336</span>
<span id="L337" rel="#L337">337</span>
<span id="L338" rel="#L338">338</span>
<span id="L339" rel="#L339">339</span>
<span id="L340" rel="#L340">340</span>
<span id="L341" rel="#L341">341</span>
<span id="L342" rel="#L342">342</span>
<span id="L343" rel="#L343">343</span>
<span id="L344" rel="#L344">344</span>
<span id="L345" rel="#L345">345</span>
<span id="L346" rel="#L346">346</span>
<span id="L347" rel="#L347">347</span>
<span id="L348" rel="#L348">348</span>
<span id="L349" rel="#L349">349</span>
<span id="L350" rel="#L350">350</span>
<span id="L351" rel="#L351">351</span>
<span id="L352" rel="#L352">352</span>
<span id="L353" rel="#L353">353</span>
<span id="L354" rel="#L354">354</span>
<span id="L355" rel="#L355">355</span>
<span id="L356" rel="#L356">356</span>
<span id="L357" rel="#L357">357</span>
<span id="L358" rel="#L358">358</span>
<span id="L359" rel="#L359">359</span>
<span id="L360" rel="#L360">360</span>
<span id="L361" rel="#L361">361</span>
<span id="L362" rel="#L362">362</span>
<span id="L363" rel="#L363">363</span>
<span id="L364" rel="#L364">364</span>
<span id="L365" rel="#L365">365</span>
<span id="L366" rel="#L366">366</span>
<span id="L367" rel="#L367">367</span>
<span id="L368" rel="#L368">368</span>
<span id="L369" rel="#L369">369</span>
<span id="L370" rel="#L370">370</span>
<span id="L371" rel="#L371">371</span>
<span id="L372" rel="#L372">372</span>
<span id="L373" rel="#L373">373</span>
<span id="L374" rel="#L374">374</span>
<span id="L375" rel="#L375">375</span>
<span id="L376" rel="#L376">376</span>
<span id="L377" rel="#L377">377</span>
<span id="L378" rel="#L378">378</span>
<span id="L379" rel="#L379">379</span>
<span id="L380" rel="#L380">380</span>
<span id="L381" rel="#L381">381</span>
<span id="L382" rel="#L382">382</span>
<span id="L383" rel="#L383">383</span>
<span id="L384" rel="#L384">384</span>
<span id="L385" rel="#L385">385</span>
<span id="L386" rel="#L386">386</span>
<span id="L387" rel="#L387">387</span>
<span id="L388" rel="#L388">388</span>
<span id="L389" rel="#L389">389</span>
<span id="L390" rel="#L390">390</span>
<span id="L391" rel="#L391">391</span>
<span id="L392" rel="#L392">392</span>
<span id="L393" rel="#L393">393</span>
<span id="L394" rel="#L394">394</span>
<span id="L395" rel="#L395">395</span>
<span id="L396" rel="#L396">396</span>
<span id="L397" rel="#L397">397</span>
<span id="L398" rel="#L398">398</span>
<span id="L399" rel="#L399">399</span>
<span id="L400" rel="#L400">400</span>
<span id="L401" rel="#L401">401</span>
<span id="L402" rel="#L402">402</span>
<span id="L403" rel="#L403">403</span>
<span id="L404" rel="#L404">404</span>
<span id="L405" rel="#L405">405</span>
<span id="L406" rel="#L406">406</span>
<span id="L407" rel="#L407">407</span>
<span id="L408" rel="#L408">408</span>
<span id="L409" rel="#L409">409</span>
<span id="L410" rel="#L410">410</span>
<span id="L411" rel="#L411">411</span>
<span id="L412" rel="#L412">412</span>
<span id="L413" rel="#L413">413</span>
<span id="L414" rel="#L414">414</span>
<span id="L415" rel="#L415">415</span>
<span id="L416" rel="#L416">416</span>
<span id="L417" rel="#L417">417</span>
<span id="L418" rel="#L418">418</span>
<span id="L419" rel="#L419">419</span>
<span id="L420" rel="#L420">420</span>
<span id="L421" rel="#L421">421</span>
<span id="L422" rel="#L422">422</span>
<span id="L423" rel="#L423">423</span>
<span id="L424" rel="#L424">424</span>
<span id="L425" rel="#L425">425</span>
<span id="L426" rel="#L426">426</span>
<span id="L427" rel="#L427">427</span>
<span id="L428" rel="#L428">428</span>
<span id="L429" rel="#L429">429</span>
<span id="L430" rel="#L430">430</span>
<span id="L431" rel="#L431">431</span>
<span id="L432" rel="#L432">432</span>
<span id="L433" rel="#L433">433</span>
<span id="L434" rel="#L434">434</span>
<span id="L435" rel="#L435">435</span>
<span id="L436" rel="#L436">436</span>
<span id="L437" rel="#L437">437</span>
<span id="L438" rel="#L438">438</span>
<span id="L439" rel="#L439">439</span>
<span id="L440" rel="#L440">440</span>
<span id="L441" rel="#L441">441</span>
<span id="L442" rel="#L442">442</span>
<span id="L443" rel="#L443">443</span>
<span id="L444" rel="#L444">444</span>
<span id="L445" rel="#L445">445</span>
<span id="L446" rel="#L446">446</span>
<span id="L447" rel="#L447">447</span>
<span id="L448" rel="#L448">448</span>
<span id="L449" rel="#L449">449</span>
<span id="L450" rel="#L450">450</span>
<span id="L451" rel="#L451">451</span>
<span id="L452" rel="#L452">452</span>
<span id="L453" rel="#L453">453</span>
<span id="L454" rel="#L454">454</span>
<span id="L455" rel="#L455">455</span>
<span id="L456" rel="#L456">456</span>
<span id="L457" rel="#L457">457</span>
<span id="L458" rel="#L458">458</span>
<span id="L459" rel="#L459">459</span>
<span id="L460" rel="#L460">460</span>
<span id="L461" rel="#L461">461</span>
<span id="L462" rel="#L462">462</span>
<span id="L463" rel="#L463">463</span>
<span id="L464" rel="#L464">464</span>
<span id="L465" rel="#L465">465</span>
<span id="L466" rel="#L466">466</span>
<span id="L467" rel="#L467">467</span>
<span id="L468" rel="#L468">468</span>
<span id="L469" rel="#L469">469</span>
<span id="L470" rel="#L470">470</span>
<span id="L471" rel="#L471">471</span>
<span id="L472" rel="#L472">472</span>
<span id="L473" rel="#L473">473</span>
<span id="L474" rel="#L474">474</span>
<span id="L475" rel="#L475">475</span>
<span id="L476" rel="#L476">476</span>
<span id="L477" rel="#L477">477</span>
<span id="L478" rel="#L478">478</span>
<span id="L479" rel="#L479">479</span>
<span id="L480" rel="#L480">480</span>
<span id="L481" rel="#L481">481</span>
<span id="L482" rel="#L482">482</span>
<span id="L483" rel="#L483">483</span>
<span id="L484" rel="#L484">484</span>
<span id="L485" rel="#L485">485</span>
<span id="L486" rel="#L486">486</span>
<span id="L487" rel="#L487">487</span>
<span id="L488" rel="#L488">488</span>
<span id="L489" rel="#L489">489</span>
<span id="L490" rel="#L490">490</span>
<span id="L491" rel="#L491">491</span>
<span id="L492" rel="#L492">492</span>
<span id="L493" rel="#L493">493</span>
<span id="L494" rel="#L494">494</span>
<span id="L495" rel="#L495">495</span>
<span id="L496" rel="#L496">496</span>
<span id="L497" rel="#L497">497</span>
<span id="L498" rel="#L498">498</span>
<span id="L499" rel="#L499">499</span>
<span id="L500" rel="#L500">500</span>
<span id="L501" rel="#L501">501</span>
<span id="L502" rel="#L502">502</span>
<span id="L503" rel="#L503">503</span>
<span id="L504" rel="#L504">504</span>
<span id="L505" rel="#L505">505</span>
<span id="L506" rel="#L506">506</span>
<span id="L507" rel="#L507">507</span>
<span id="L508" rel="#L508">508</span>
<span id="L509" rel="#L509">509</span>
<span id="L510" rel="#L510">510</span>
<span id="L511" rel="#L511">511</span>
<span id="L512" rel="#L512">512</span>
<span id="L513" rel="#L513">513</span>
<span id="L514" rel="#L514">514</span>
<span id="L515" rel="#L515">515</span>
<span id="L516" rel="#L516">516</span>
<span id="L517" rel="#L517">517</span>
<span id="L518" rel="#L518">518</span>
<span id="L519" rel="#L519">519</span>
<span id="L520" rel="#L520">520</span>
<span id="L521" rel="#L521">521</span>
<span id="L522" rel="#L522">522</span>
<span id="L523" rel="#L523">523</span>
<span id="L524" rel="#L524">524</span>
<span id="L525" rel="#L525">525</span>
<span id="L526" rel="#L526">526</span>
<span id="L527" rel="#L527">527</span>
<span id="L528" rel="#L528">528</span>
<span id="L529" rel="#L529">529</span>
<span id="L530" rel="#L530">530</span>
<span id="L531" rel="#L531">531</span>
<span id="L532" rel="#L532">532</span>
<span id="L533" rel="#L533">533</span>
<span id="L534" rel="#L534">534</span>
<span id="L535" rel="#L535">535</span>
<span id="L536" rel="#L536">536</span>
<span id="L537" rel="#L537">537</span>
<span id="L538" rel="#L538">538</span>
<span id="L539" rel="#L539">539</span>
<span id="L540" rel="#L540">540</span>
<span id="L541" rel="#L541">541</span>
<span id="L542" rel="#L542">542</span>
<span id="L543" rel="#L543">543</span>
<span id="L544" rel="#L544">544</span>
<span id="L545" rel="#L545">545</span>
<span id="L546" rel="#L546">546</span>
<span id="L547" rel="#L547">547</span>
<span id="L548" rel="#L548">548</span>
<span id="L549" rel="#L549">549</span>
<span id="L550" rel="#L550">550</span>
<span id="L551" rel="#L551">551</span>
<span id="L552" rel="#L552">552</span>
<span id="L553" rel="#L553">553</span>
<span id="L554" rel="#L554">554</span>
<span id="L555" rel="#L555">555</span>
<span id="L556" rel="#L556">556</span>
<span id="L557" rel="#L557">557</span>
<span id="L558" rel="#L558">558</span>
<span id="L559" rel="#L559">559</span>
<span id="L560" rel="#L560">560</span>
<span id="L561" rel="#L561">561</span>
<span id="L562" rel="#L562">562</span>
<span id="L563" rel="#L563">563</span>
<span id="L564" rel="#L564">564</span>
<span id="L565" rel="#L565">565</span>
<span id="L566" rel="#L566">566</span>
<span id="L567" rel="#L567">567</span>
<span id="L568" rel="#L568">568</span>
<span id="L569" rel="#L569">569</span>
<span id="L570" rel="#L570">570</span>
<span id="L571" rel="#L571">571</span>
<span id="L572" rel="#L572">572</span>
<span id="L573" rel="#L573">573</span>
<span id="L574" rel="#L574">574</span>
<span id="L575" rel="#L575">575</span>
<span id="L576" rel="#L576">576</span>
<span id="L577" rel="#L577">577</span>
<span id="L578" rel="#L578">578</span>
<span id="L579" rel="#L579">579</span>
<span id="L580" rel="#L580">580</span>
<span id="L581" rel="#L581">581</span>
<span id="L582" rel="#L582">582</span>
<span id="L583" rel="#L583">583</span>
<span id="L584" rel="#L584">584</span>
<span id="L585" rel="#L585">585</span>
<span id="L586" rel="#L586">586</span>
<span id="L587" rel="#L587">587</span>
<span id="L588" rel="#L588">588</span>
<span id="L589" rel="#L589">589</span>
<span id="L590" rel="#L590">590</span>
<span id="L591" rel="#L591">591</span>
<span id="L592" rel="#L592">592</span>
<span id="L593" rel="#L593">593</span>
<span id="L594" rel="#L594">594</span>
<span id="L595" rel="#L595">595</span>
<span id="L596" rel="#L596">596</span>
<span id="L597" rel="#L597">597</span>
<span id="L598" rel="#L598">598</span>
<span id="L599" rel="#L599">599</span>
<span id="L600" rel="#L600">600</span>
<span id="L601" rel="#L601">601</span>
<span id="L602" rel="#L602">602</span>
<span id="L603" rel="#L603">603</span>
<span id="L604" rel="#L604">604</span>
<span id="L605" rel="#L605">605</span>
<span id="L606" rel="#L606">606</span>
<span id="L607" rel="#L607">607</span>
<span id="L608" rel="#L608">608</span>
<span id="L609" rel="#L609">609</span>
<span id="L610" rel="#L610">610</span>
<span id="L611" rel="#L611">611</span>
<span id="L612" rel="#L612">612</span>
<span id="L613" rel="#L613">613</span>
<span id="L614" rel="#L614">614</span>
<span id="L615" rel="#L615">615</span>
<span id="L616" rel="#L616">616</span>
<span id="L617" rel="#L617">617</span>
<span id="L618" rel="#L618">618</span>
<span id="L619" rel="#L619">619</span>
<span id="L620" rel="#L620">620</span>
<span id="L621" rel="#L621">621</span>
<span id="L622" rel="#L622">622</span>
<span id="L623" rel="#L623">623</span>
<span id="L624" rel="#L624">624</span>
<span id="L625" rel="#L625">625</span>
<span id="L626" rel="#L626">626</span>
<span id="L627" rel="#L627">627</span>
<span id="L628" rel="#L628">628</span>
<span id="L629" rel="#L629">629</span>
<span id="L630" rel="#L630">630</span>
<span id="L631" rel="#L631">631</span>
<span id="L632" rel="#L632">632</span>
<span id="L633" rel="#L633">633</span>
<span id="L634" rel="#L634">634</span>
<span id="L635" rel="#L635">635</span>
<span id="L636" rel="#L636">636</span>
<span id="L637" rel="#L637">637</span>
<span id="L638" rel="#L638">638</span>
<span id="L639" rel="#L639">639</span>
<span id="L640" rel="#L640">640</span>
<span id="L641" rel="#L641">641</span>
<span id="L642" rel="#L642">642</span>
<span id="L643" rel="#L643">643</span>
<span id="L644" rel="#L644">644</span>
<span id="L645" rel="#L645">645</span>
<span id="L646" rel="#L646">646</span>
<span id="L647" rel="#L647">647</span>
<span id="L648" rel="#L648">648</span>
<span id="L649" rel="#L649">649</span>
<span id="L650" rel="#L650">650</span>
<span id="L651" rel="#L651">651</span>
<span id="L652" rel="#L652">652</span>
<span id="L653" rel="#L653">653</span>
<span id="L654" rel="#L654">654</span>
<span id="L655" rel="#L655">655</span>
<span id="L656" rel="#L656">656</span>
<span id="L657" rel="#L657">657</span>
<span id="L658" rel="#L658">658</span>
<span id="L659" rel="#L659">659</span>
<span id="L660" rel="#L660">660</span>
<span id="L661" rel="#L661">661</span>
<span id="L662" rel="#L662">662</span>
<span id="L663" rel="#L663">663</span>
<span id="L664" rel="#L664">664</span>
<span id="L665" rel="#L665">665</span>
<span id="L666" rel="#L666">666</span>
<span id="L667" rel="#L667">667</span>
<span id="L668" rel="#L668">668</span>
<span id="L669" rel="#L669">669</span>
<span id="L670" rel="#L670">670</span>
<span id="L671" rel="#L671">671</span>
<span id="L672" rel="#L672">672</span>
<span id="L673" rel="#L673">673</span>
<span id="L674" rel="#L674">674</span>
<span id="L675" rel="#L675">675</span>
<span id="L676" rel="#L676">676</span>
<span id="L677" rel="#L677">677</span>
<span id="L678" rel="#L678">678</span>
<span id="L679" rel="#L679">679</span>
<span id="L680" rel="#L680">680</span>
<span id="L681" rel="#L681">681</span>
<span id="L682" rel="#L682">682</span>
<span id="L683" rel="#L683">683</span>
<span id="L684" rel="#L684">684</span>
<span id="L685" rel="#L685">685</span>
<span id="L686" rel="#L686">686</span>
<span id="L687" rel="#L687">687</span>
<span id="L688" rel="#L688">688</span>
<span id="L689" rel="#L689">689</span>
<span id="L690" rel="#L690">690</span>
<span id="L691" rel="#L691">691</span>
<span id="L692" rel="#L692">692</span>
<span id="L693" rel="#L693">693</span>
<span id="L694" rel="#L694">694</span>
<span id="L695" rel="#L695">695</span>
<span id="L696" rel="#L696">696</span>
<span id="L697" rel="#L697">697</span>
<span id="L698" rel="#L698">698</span>
<span id="L699" rel="#L699">699</span>
<span id="L700" rel="#L700">700</span>
<span id="L701" rel="#L701">701</span>
<span id="L702" rel="#L702">702</span>
<span id="L703" rel="#L703">703</span>
<span id="L704" rel="#L704">704</span>
<span id="L705" rel="#L705">705</span>
<span id="L706" rel="#L706">706</span>
<span id="L707" rel="#L707">707</span>
<span id="L708" rel="#L708">708</span>
<span id="L709" rel="#L709">709</span>
<span id="L710" rel="#L710">710</span>
<span id="L711" rel="#L711">711</span>
<span id="L712" rel="#L712">712</span>
<span id="L713" rel="#L713">713</span>
<span id="L714" rel="#L714">714</span>
<span id="L715" rel="#L715">715</span>
<span id="L716" rel="#L716">716</span>
<span id="L717" rel="#L717">717</span>
<span id="L718" rel="#L718">718</span>
<span id="L719" rel="#L719">719</span>
<span id="L720" rel="#L720">720</span>
<span id="L721" rel="#L721">721</span>
<span id="L722" rel="#L722">722</span>
<span id="L723" rel="#L723">723</span>
<span id="L724" rel="#L724">724</span>
<span id="L725" rel="#L725">725</span>
<span id="L726" rel="#L726">726</span>
<span id="L727" rel="#L727">727</span>
<span id="L728" rel="#L728">728</span>
<span id="L729" rel="#L729">729</span>
<span id="L730" rel="#L730">730</span>
<span id="L731" rel="#L731">731</span>
<span id="L732" rel="#L732">732</span>
<span id="L733" rel="#L733">733</span>
<span id="L734" rel="#L734">734</span>
<span id="L735" rel="#L735">735</span>
<span id="L736" rel="#L736">736</span>
<span id="L737" rel="#L737">737</span>
<span id="L738" rel="#L738">738</span>
<span id="L739" rel="#L739">739</span>
<span id="L740" rel="#L740">740</span>
<span id="L741" rel="#L741">741</span>
<span id="L742" rel="#L742">742</span>
<span id="L743" rel="#L743">743</span>
<span id="L744" rel="#L744">744</span>
<span id="L745" rel="#L745">745</span>
<span id="L746" rel="#L746">746</span>
<span id="L747" rel="#L747">747</span>
<span id="L748" rel="#L748">748</span>
<span id="L749" rel="#L749">749</span>
<span id="L750" rel="#L750">750</span>
<span id="L751" rel="#L751">751</span>
<span id="L752" rel="#L752">752</span>
<span id="L753" rel="#L753">753</span>
<span id="L754" rel="#L754">754</span>
<span id="L755" rel="#L755">755</span>
<span id="L756" rel="#L756">756</span>
<span id="L757" rel="#L757">757</span>
<span id="L758" rel="#L758">758</span>
<span id="L759" rel="#L759">759</span>
<span id="L760" rel="#L760">760</span>
<span id="L761" rel="#L761">761</span>
<span id="L762" rel="#L762">762</span>
<span id="L763" rel="#L763">763</span>
<span id="L764" rel="#L764">764</span>
<span id="L765" rel="#L765">765</span>
<span id="L766" rel="#L766">766</span>
<span id="L767" rel="#L767">767</span>
<span id="L768" rel="#L768">768</span>
<span id="L769" rel="#L769">769</span>
<span id="L770" rel="#L770">770</span>
<span id="L771" rel="#L771">771</span>
<span id="L772" rel="#L772">772</span>
<span id="L773" rel="#L773">773</span>
<span id="L774" rel="#L774">774</span>
<span id="L775" rel="#L775">775</span>
<span id="L776" rel="#L776">776</span>
<span id="L777" rel="#L777">777</span>
<span id="L778" rel="#L778">778</span>
<span id="L779" rel="#L779">779</span>
<span id="L780" rel="#L780">780</span>
<span id="L781" rel="#L781">781</span>
<span id="L782" rel="#L782">782</span>
<span id="L783" rel="#L783">783</span>
<span id="L784" rel="#L784">784</span>
<span id="L785" rel="#L785">785</span>
<span id="L786" rel="#L786">786</span>
<span id="L787" rel="#L787">787</span>
<span id="L788" rel="#L788">788</span>
<span id="L789" rel="#L789">789</span>
<span id="L790" rel="#L790">790</span>
<span id="L791" rel="#L791">791</span>
<span id="L792" rel="#L792">792</span>
<span id="L793" rel="#L793">793</span>
<span id="L794" rel="#L794">794</span>
<span id="L795" rel="#L795">795</span>
<span id="L796" rel="#L796">796</span>
<span id="L797" rel="#L797">797</span>
<span id="L798" rel="#L798">798</span>
<span id="L799" rel="#L799">799</span>
<span id="L800" rel="#L800">800</span>
<span id="L801" rel="#L801">801</span>
<span id="L802" rel="#L802">802</span>
<span id="L803" rel="#L803">803</span>
<span id="L804" rel="#L804">804</span>
<span id="L805" rel="#L805">805</span>
<span id="L806" rel="#L806">806</span>
<span id="L807" rel="#L807">807</span>
<span id="L808" rel="#L808">808</span>
<span id="L809" rel="#L809">809</span>
<span id="L810" rel="#L810">810</span>
<span id="L811" rel="#L811">811</span>
<span id="L812" rel="#L812">812</span>
<span id="L813" rel="#L813">813</span>
<span id="L814" rel="#L814">814</span>
<span id="L815" rel="#L815">815</span>
<span id="L816" rel="#L816">816</span>
<span id="L817" rel="#L817">817</span>
<span id="L818" rel="#L818">818</span>
<span id="L819" rel="#L819">819</span>
<span id="L820" rel="#L820">820</span>
<span id="L821" rel="#L821">821</span>
<span id="L822" rel="#L822">822</span>
<span id="L823" rel="#L823">823</span>
<span id="L824" rel="#L824">824</span>
<span id="L825" rel="#L825">825</span>
<span id="L826" rel="#L826">826</span>
<span id="L827" rel="#L827">827</span>
<span id="L828" rel="#L828">828</span>
<span id="L829" rel="#L829">829</span>
<span id="L830" rel="#L830">830</span>
<span id="L831" rel="#L831">831</span>
<span id="L832" rel="#L832">832</span>
<span id="L833" rel="#L833">833</span>
<span id="L834" rel="#L834">834</span>
<span id="L835" rel="#L835">835</span>
<span id="L836" rel="#L836">836</span>
<span id="L837" rel="#L837">837</span>
<span id="L838" rel="#L838">838</span>
<span id="L839" rel="#L839">839</span>
<span id="L840" rel="#L840">840</span>
<span id="L841" rel="#L841">841</span>
<span id="L842" rel="#L842">842</span>
<span id="L843" rel="#L843">843</span>
<span id="L844" rel="#L844">844</span>
<span id="L845" rel="#L845">845</span>
<span id="L846" rel="#L846">846</span>
<span id="L847" rel="#L847">847</span>
<span id="L848" rel="#L848">848</span>
<span id="L849" rel="#L849">849</span>
<span id="L850" rel="#L850">850</span>
<span id="L851" rel="#L851">851</span>
<span id="L852" rel="#L852">852</span>
<span id="L853" rel="#L853">853</span>
<span id="L854" rel="#L854">854</span>
<span id="L855" rel="#L855">855</span>
<span id="L856" rel="#L856">856</span>
<span id="L857" rel="#L857">857</span>
<span id="L858" rel="#L858">858</span>
<span id="L859" rel="#L859">859</span>
<span id="L860" rel="#L860">860</span>
<span id="L861" rel="#L861">861</span>
<span id="L862" rel="#L862">862</span>
<span id="L863" rel="#L863">863</span>
<span id="L864" rel="#L864">864</span>
<span id="L865" rel="#L865">865</span>
<span id="L866" rel="#L866">866</span>
<span id="L867" rel="#L867">867</span>
<span id="L868" rel="#L868">868</span>
<span id="L869" rel="#L869">869</span>
<span id="L870" rel="#L870">870</span>
<span id="L871" rel="#L871">871</span>
<span id="L872" rel="#L872">872</span>
<span id="L873" rel="#L873">873</span>
<span id="L874" rel="#L874">874</span>
<span id="L875" rel="#L875">875</span>
<span id="L876" rel="#L876">876</span>
<span id="L877" rel="#L877">877</span>
<span id="L878" rel="#L878">878</span>
<span id="L879" rel="#L879">879</span>
<span id="L880" rel="#L880">880</span>
<span id="L881" rel="#L881">881</span>
<span id="L882" rel="#L882">882</span>
<span id="L883" rel="#L883">883</span>
<span id="L884" rel="#L884">884</span>
<span id="L885" rel="#L885">885</span>
<span id="L886" rel="#L886">886</span>
<span id="L887" rel="#L887">887</span>
<span id="L888" rel="#L888">888</span>
<span id="L889" rel="#L889">889</span>
<span id="L890" rel="#L890">890</span>
<span id="L891" rel="#L891">891</span>
<span id="L892" rel="#L892">892</span>
<span id="L893" rel="#L893">893</span>
<span id="L894" rel="#L894">894</span>
<span id="L895" rel="#L895">895</span>
<span id="L896" rel="#L896">896</span>
<span id="L897" rel="#L897">897</span>
<span id="L898" rel="#L898">898</span>
<span id="L899" rel="#L899">899</span>
<span id="L900" rel="#L900">900</span>
<span id="L901" rel="#L901">901</span>
<span id="L902" rel="#L902">902</span>
<span id="L903" rel="#L903">903</span>
<span id="L904" rel="#L904">904</span>
<span id="L905" rel="#L905">905</span>
<span id="L906" rel="#L906">906</span>
<span id="L907" rel="#L907">907</span>
<span id="L908" rel="#L908">908</span>
<span id="L909" rel="#L909">909</span>
<span id="L910" rel="#L910">910</span>
<span id="L911" rel="#L911">911</span>
<span id="L912" rel="#L912">912</span>
<span id="L913" rel="#L913">913</span>
<span id="L914" rel="#L914">914</span>
<span id="L915" rel="#L915">915</span>
<span id="L916" rel="#L916">916</span>
<span id="L917" rel="#L917">917</span>
<span id="L918" rel="#L918">918</span>
<span id="L919" rel="#L919">919</span>
<span id="L920" rel="#L920">920</span>
<span id="L921" rel="#L921">921</span>
<span id="L922" rel="#L922">922</span>
<span id="L923" rel="#L923">923</span>
<span id="L924" rel="#L924">924</span>
<span id="L925" rel="#L925">925</span>
<span id="L926" rel="#L926">926</span>
<span id="L927" rel="#L927">927</span>
<span id="L928" rel="#L928">928</span>
<span id="L929" rel="#L929">929</span>
<span id="L930" rel="#L930">930</span>
<span id="L931" rel="#L931">931</span>
<span id="L932" rel="#L932">932</span>
<span id="L933" rel="#L933">933</span>
<span id="L934" rel="#L934">934</span>
<span id="L935" rel="#L935">935</span>
<span id="L936" rel="#L936">936</span>
<span id="L937" rel="#L937">937</span>
<span id="L938" rel="#L938">938</span>
<span id="L939" rel="#L939">939</span>
<span id="L940" rel="#L940">940</span>
<span id="L941" rel="#L941">941</span>
<span id="L942" rel="#L942">942</span>
<span id="L943" rel="#L943">943</span>
<span id="L944" rel="#L944">944</span>
<span id="L945" rel="#L945">945</span>
<span id="L946" rel="#L946">946</span>
<span id="L947" rel="#L947">947</span>
<span id="L948" rel="#L948">948</span>
<span id="L949" rel="#L949">949</span>
<span id="L950" rel="#L950">950</span>
<span id="L951" rel="#L951">951</span>
<span id="L952" rel="#L952">952</span>
<span id="L953" rel="#L953">953</span>
<span id="L954" rel="#L954">954</span>
<span id="L955" rel="#L955">955</span>
<span id="L956" rel="#L956">956</span>
<span id="L957" rel="#L957">957</span>
<span id="L958" rel="#L958">958</span>
<span id="L959" rel="#L959">959</span>
<span id="L960" rel="#L960">960</span>
<span id="L961" rel="#L961">961</span>
<span id="L962" rel="#L962">962</span>
<span id="L963" rel="#L963">963</span>
<span id="L964" rel="#L964">964</span>
<span id="L965" rel="#L965">965</span>
<span id="L966" rel="#L966">966</span>
<span id="L967" rel="#L967">967</span>
<span id="L968" rel="#L968">968</span>
<span id="L969" rel="#L969">969</span>
<span id="L970" rel="#L970">970</span>
<span id="L971" rel="#L971">971</span>
<span id="L972" rel="#L972">972</span>
<span id="L973" rel="#L973">973</span>
<span id="L974" rel="#L974">974</span>
<span id="L975" rel="#L975">975</span>
<span id="L976" rel="#L976">976</span>
<span id="L977" rel="#L977">977</span>
<span id="L978" rel="#L978">978</span>
<span id="L979" rel="#L979">979</span>
<span id="L980" rel="#L980">980</span>
<span id="L981" rel="#L981">981</span>
<span id="L982" rel="#L982">982</span>
<span id="L983" rel="#L983">983</span>
<span id="L984" rel="#L984">984</span>
<span id="L985" rel="#L985">985</span>
<span id="L986" rel="#L986">986</span>
<span id="L987" rel="#L987">987</span>
<span id="L988" rel="#L988">988</span>
<span id="L989" rel="#L989">989</span>
<span id="L990" rel="#L990">990</span>
<span id="L991" rel="#L991">991</span>
<span id="L992" rel="#L992">992</span>
<span id="L993" rel="#L993">993</span>
<span id="L994" rel="#L994">994</span>
<span id="L995" rel="#L995">995</span>
<span id="L996" rel="#L996">996</span>
<span id="L997" rel="#L997">997</span>
<span id="L998" rel="#L998">998</span>
<span id="L999" rel="#L999">999</span>
<span id="L1000" rel="#L1000">1000</span>
<span id="L1001" rel="#L1001">1001</span>
<span id="L1002" rel="#L1002">1002</span>
<span id="L1003" rel="#L1003">1003</span>
<span id="L1004" rel="#L1004">1004</span>
<span id="L1005" rel="#L1005">1005</span>
<span id="L1006" rel="#L1006">1006</span>
<span id="L1007" rel="#L1007">1007</span>
<span id="L1008" rel="#L1008">1008</span>
<span id="L1009" rel="#L1009">1009</span>
<span id="L1010" rel="#L1010">1010</span>
<span id="L1011" rel="#L1011">1011</span>
<span id="L1012" rel="#L1012">1012</span>
<span id="L1013" rel="#L1013">1013</span>
<span id="L1014" rel="#L1014">1014</span>
<span id="L1015" rel="#L1015">1015</span>
<span id="L1016" rel="#L1016">1016</span>
<span id="L1017" rel="#L1017">1017</span>
<span id="L1018" rel="#L1018">1018</span>
<span id="L1019" rel="#L1019">1019</span>
<span id="L1020" rel="#L1020">1020</span>
<span id="L1021" rel="#L1021">1021</span>
<span id="L1022" rel="#L1022">1022</span>
<span id="L1023" rel="#L1023">1023</span>
<span id="L1024" rel="#L1024">1024</span>
<span id="L1025" rel="#L1025">1025</span>
<span id="L1026" rel="#L1026">1026</span>
<span id="L1027" rel="#L1027">1027</span>
<span id="L1028" rel="#L1028">1028</span>
<span id="L1029" rel="#L1029">1029</span>
<span id="L1030" rel="#L1030">1030</span>
<span id="L1031" rel="#L1031">1031</span>
<span id="L1032" rel="#L1032">1032</span>
<span id="L1033" rel="#L1033">1033</span>
<span id="L1034" rel="#L1034">1034</span>
<span id="L1035" rel="#L1035">1035</span>
<span id="L1036" rel="#L1036">1036</span>
<span id="L1037" rel="#L1037">1037</span>
<span id="L1038" rel="#L1038">1038</span>
<span id="L1039" rel="#L1039">1039</span>
<span id="L1040" rel="#L1040">1040</span>
<span id="L1041" rel="#L1041">1041</span>
<span id="L1042" rel="#L1042">1042</span>
<span id="L1043" rel="#L1043">1043</span>
<span id="L1044" rel="#L1044">1044</span>
<span id="L1045" rel="#L1045">1045</span>
<span id="L1046" rel="#L1046">1046</span>
<span id="L1047" rel="#L1047">1047</span>
<span id="L1048" rel="#L1048">1048</span>
<span id="L1049" rel="#L1049">1049</span>
<span id="L1050" rel="#L1050">1050</span>
<span id="L1051" rel="#L1051">1051</span>
<span id="L1052" rel="#L1052">1052</span>
<span id="L1053" rel="#L1053">1053</span>
<span id="L1054" rel="#L1054">1054</span>
<span id="L1055" rel="#L1055">1055</span>
<span id="L1056" rel="#L1056">1056</span>
<span id="L1057" rel="#L1057">1057</span>
<span id="L1058" rel="#L1058">1058</span>
<span id="L1059" rel="#L1059">1059</span>
<span id="L1060" rel="#L1060">1060</span>
<span id="L1061" rel="#L1061">1061</span>
<span id="L1062" rel="#L1062">1062</span>
<span id="L1063" rel="#L1063">1063</span>
<span id="L1064" rel="#L1064">1064</span>
<span id="L1065" rel="#L1065">1065</span>
<span id="L1066" rel="#L1066">1066</span>
<span id="L1067" rel="#L1067">1067</span>
<span id="L1068" rel="#L1068">1068</span>
<span id="L1069" rel="#L1069">1069</span>
<span id="L1070" rel="#L1070">1070</span>
<span id="L1071" rel="#L1071">1071</span>
<span id="L1072" rel="#L1072">1072</span>
<span id="L1073" rel="#L1073">1073</span>
<span id="L1074" rel="#L1074">1074</span>
<span id="L1075" rel="#L1075">1075</span>
<span id="L1076" rel="#L1076">1076</span>
<span id="L1077" rel="#L1077">1077</span>
<span id="L1078" rel="#L1078">1078</span>
<span id="L1079" rel="#L1079">1079</span>
<span id="L1080" rel="#L1080">1080</span>
<span id="L1081" rel="#L1081">1081</span>
<span id="L1082" rel="#L1082">1082</span>
<span id="L1083" rel="#L1083">1083</span>
<span id="L1084" rel="#L1084">1084</span>
<span id="L1085" rel="#L1085">1085</span>
<span id="L1086" rel="#L1086">1086</span>
<span id="L1087" rel="#L1087">1087</span>
<span id="L1088" rel="#L1088">1088</span>
<span id="L1089" rel="#L1089">1089</span>
<span id="L1090" rel="#L1090">1090</span>
<span id="L1091" rel="#L1091">1091</span>
<span id="L1092" rel="#L1092">1092</span>
<span id="L1093" rel="#L1093">1093</span>
<span id="L1094" rel="#L1094">1094</span>
<span id="L1095" rel="#L1095">1095</span>
<span id="L1096" rel="#L1096">1096</span>
<span id="L1097" rel="#L1097">1097</span>
<span id="L1098" rel="#L1098">1098</span>
<span id="L1099" rel="#L1099">1099</span>
<span id="L1100" rel="#L1100">1100</span>
<span id="L1101" rel="#L1101">1101</span>
<span id="L1102" rel="#L1102">1102</span>
<span id="L1103" rel="#L1103">1103</span>
<span id="L1104" rel="#L1104">1104</span>
<span id="L1105" rel="#L1105">1105</span>
<span id="L1106" rel="#L1106">1106</span>
<span id="L1107" rel="#L1107">1107</span>
<span id="L1108" rel="#L1108">1108</span>
<span id="L1109" rel="#L1109">1109</span>
<span id="L1110" rel="#L1110">1110</span>
<span id="L1111" rel="#L1111">1111</span>
<span id="L1112" rel="#L1112">1112</span>
<span id="L1113" rel="#L1113">1113</span>
<span id="L1114" rel="#L1114">1114</span>
<span id="L1115" rel="#L1115">1115</span>
<span id="L1116" rel="#L1116">1116</span>
<span id="L1117" rel="#L1117">1117</span>
<span id="L1118" rel="#L1118">1118</span>
<span id="L1119" rel="#L1119">1119</span>
<span id="L1120" rel="#L1120">1120</span>
<span id="L1121" rel="#L1121">1121</span>
<span id="L1122" rel="#L1122">1122</span>
<span id="L1123" rel="#L1123">1123</span>
<span id="L1124" rel="#L1124">1124</span>
<span id="L1125" rel="#L1125">1125</span>
<span id="L1126" rel="#L1126">1126</span>
<span id="L1127" rel="#L1127">1127</span>
<span id="L1128" rel="#L1128">1128</span>
<span id="L1129" rel="#L1129">1129</span>
<span id="L1130" rel="#L1130">1130</span>
<span id="L1131" rel="#L1131">1131</span>
<span id="L1132" rel="#L1132">1132</span>
<span id="L1133" rel="#L1133">1133</span>
<span id="L1134" rel="#L1134">1134</span>
<span id="L1135" rel="#L1135">1135</span>
<span id="L1136" rel="#L1136">1136</span>
<span id="L1137" rel="#L1137">1137</span>
<span id="L1138" rel="#L1138">1138</span>
<span id="L1139" rel="#L1139">1139</span>
<span id="L1140" rel="#L1140">1140</span>
<span id="L1141" rel="#L1141">1141</span>
<span id="L1142" rel="#L1142">1142</span>
<span id="L1143" rel="#L1143">1143</span>
<span id="L1144" rel="#L1144">1144</span>
<span id="L1145" rel="#L1145">1145</span>
<span id="L1146" rel="#L1146">1146</span>
<span id="L1147" rel="#L1147">1147</span>
<span id="L1148" rel="#L1148">1148</span>
<span id="L1149" rel="#L1149">1149</span>
<span id="L1150" rel="#L1150">1150</span>
<span id="L1151" rel="#L1151">1151</span>
<span id="L1152" rel="#L1152">1152</span>
<span id="L1153" rel="#L1153">1153</span>
<span id="L1154" rel="#L1154">1154</span>
<span id="L1155" rel="#L1155">1155</span>
<span id="L1156" rel="#L1156">1156</span>
<span id="L1157" rel="#L1157">1157</span>
<span id="L1158" rel="#L1158">1158</span>
<span id="L1159" rel="#L1159">1159</span>
<span id="L1160" rel="#L1160">1160</span>
<span id="L1161" rel="#L1161">1161</span>
<span id="L1162" rel="#L1162">1162</span>
<span id="L1163" rel="#L1163">1163</span>
<span id="L1164" rel="#L1164">1164</span>
<span id="L1165" rel="#L1165">1165</span>
<span id="L1166" rel="#L1166">1166</span>
<span id="L1167" rel="#L1167">1167</span>
<span id="L1168" rel="#L1168">1168</span>
<span id="L1169" rel="#L1169">1169</span>
<span id="L1170" rel="#L1170">1170</span>
<span id="L1171" rel="#L1171">1171</span>
<span id="L1172" rel="#L1172">1172</span>
<span id="L1173" rel="#L1173">1173</span>
<span id="L1174" rel="#L1174">1174</span>
<span id="L1175" rel="#L1175">1175</span>
<span id="L1176" rel="#L1176">1176</span>
<span id="L1177" rel="#L1177">1177</span>
<span id="L1178" rel="#L1178">1178</span>
<span id="L1179" rel="#L1179">1179</span>
<span id="L1180" rel="#L1180">1180</span>
<span id="L1181" rel="#L1181">1181</span>
<span id="L1182" rel="#L1182">1182</span>
<span id="L1183" rel="#L1183">1183</span>
<span id="L1184" rel="#L1184">1184</span>
<span id="L1185" rel="#L1185">1185</span>
<span id="L1186" rel="#L1186">1186</span>
<span id="L1187" rel="#L1187">1187</span>
<span id="L1188" rel="#L1188">1188</span>
<span id="L1189" rel="#L1189">1189</span>
<span id="L1190" rel="#L1190">1190</span>
<span id="L1191" rel="#L1191">1191</span>
<span id="L1192" rel="#L1192">1192</span>
<span id="L1193" rel="#L1193">1193</span>
<span id="L1194" rel="#L1194">1194</span>
<span id="L1195" rel="#L1195">1195</span>
<span id="L1196" rel="#L1196">1196</span>
<span id="L1197" rel="#L1197">1197</span>
<span id="L1198" rel="#L1198">1198</span>
<span id="L1199" rel="#L1199">1199</span>
<span id="L1200" rel="#L1200">1200</span>
<span id="L1201" rel="#L1201">1201</span>
<span id="L1202" rel="#L1202">1202</span>
<span id="L1203" rel="#L1203">1203</span>
<span id="L1204" rel="#L1204">1204</span>
<span id="L1205" rel="#L1205">1205</span>
<span id="L1206" rel="#L1206">1206</span>
<span id="L1207" rel="#L1207">1207</span>
<span id="L1208" rel="#L1208">1208</span>

            </td>
            <td class="blob-line-code"><div class="code-body highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'><span class="sd">/**</span></div><div class='line' id='LC3'><span class="sd"> * PHPUnit</span></div><div class='line' id='LC4'><span class="sd"> *</span></div><div class='line' id='LC5'><span class="sd"> * Copyright (c) 2010-2013, Sebastian Bergmann &lt;sebastian@phpunit.de&gt;.</span></div><div class='line' id='LC6'><span class="sd"> * All rights reserved.</span></div><div class='line' id='LC7'><span class="sd"> *</span></div><div class='line' id='LC8'><span class="sd"> * Redistribution and use in source and binary forms, with or without</span></div><div class='line' id='LC9'><span class="sd"> * modification, are permitted provided that the following conditions</span></div><div class='line' id='LC10'><span class="sd"> * are met:</span></div><div class='line' id='LC11'><span class="sd"> *</span></div><div class='line' id='LC12'><span class="sd"> *   * Redistributions of source code must retain the above copyright</span></div><div class='line' id='LC13'><span class="sd"> *     notice, this list of conditions and the following disclaimer.</span></div><div class='line' id='LC14'><span class="sd"> *</span></div><div class='line' id='LC15'><span class="sd"> *   * Redistributions in binary form must reproduce the above copyright</span></div><div class='line' id='LC16'><span class="sd"> *     notice, this list of conditions and the following disclaimer in</span></div><div class='line' id='LC17'><span class="sd"> *     the documentation and/or other materials provided with the</span></div><div class='line' id='LC18'><span class="sd"> *     distribution.</span></div><div class='line' id='LC19'><span class="sd"> *</span></div><div class='line' id='LC20'><span class="sd"> *   * Neither the name of Sebastian Bergmann nor the names of his</span></div><div class='line' id='LC21'><span class="sd"> *     contributors may be used to endorse or promote products derived</span></div><div class='line' id='LC22'><span class="sd"> *     from this software without specific prior written permission.</span></div><div class='line' id='LC23'><span class="sd"> *</span></div><div class='line' id='LC24'><span class="sd"> * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS</span></div><div class='line' id='LC25'><span class="sd"> * &quot;AS IS&quot; AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT</span></div><div class='line' id='LC26'><span class="sd"> * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS</span></div><div class='line' id='LC27'><span class="sd"> * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE</span></div><div class='line' id='LC28'><span class="sd"> * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,</span></div><div class='line' id='LC29'><span class="sd"> * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,</span></div><div class='line' id='LC30'><span class="sd"> * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;</span></div><div class='line' id='LC31'><span class="sd"> * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER</span></div><div class='line' id='LC32'><span class="sd"> * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT</span></div><div class='line' id='LC33'><span class="sd"> * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN</span></div><div class='line' id='LC34'><span class="sd"> * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE</span></div><div class='line' id='LC35'><span class="sd"> * POSSIBILITY OF SUCH DAMAGE.</span></div><div class='line' id='LC36'><span class="sd"> *</span></div><div class='line' id='LC37'><span class="sd"> * @package    PHPUnit_Selenium</span></div><div class='line' id='LC38'><span class="sd"> * @author     Sebastian Bergmann &lt;sebastian@phpunit.de&gt;</span></div><div class='line' id='LC39'><span class="sd"> * @copyright  2010-2013 Sebastian Bergmann &lt;sebastian@phpunit.de&gt;</span></div><div class='line' id='LC40'><span class="sd"> * @license    http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License</span></div><div class='line' id='LC41'><span class="sd"> * @link       http://www.phpunit.de/</span></div><div class='line' id='LC42'><span class="sd"> * @since      File available since Release 1.0.0</span></div><div class='line' id='LC43'><span class="sd"> */</span></div><div class='line' id='LC44'><br/></div><div class='line' id='LC45'><span class="sd">/**</span></div><div class='line' id='LC46'><span class="sd"> * TestCase class that uses Selenium to provide</span></div><div class='line' id='LC47'><span class="sd"> * the functionality required for web testing.</span></div><div class='line' id='LC48'><span class="sd"> *</span></div><div class='line' id='LC49'><span class="sd"> * @package    PHPUnit_Selenium</span></div><div class='line' id='LC50'><span class="sd"> * @author     Sebastian Bergmann &lt;sebastian@phpunit.de&gt;</span></div><div class='line' id='LC51'><span class="sd"> * @copyright  2010-2013 Sebastian Bergmann &lt;sebastian@phpunit.de&gt;</span></div><div class='line' id='LC52'><span class="sd"> * @license    http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License</span></div><div class='line' id='LC53'><span class="sd"> * @version    Release: @package_version@</span></div><div class='line' id='LC54'><span class="sd"> * @link       http://www.phpunit.de/</span></div><div class='line' id='LC55'><span class="sd"> * @since      Class available since Release 1.0.0</span></div><div class='line' id='LC56'><span class="sd"> *</span></div><div class='line' id='LC57'><span class="sd"> * @method unknown  addLocationStrategy()</span></div><div class='line' id='LC58'><span class="sd"> * @method unknown  addLocationStrategyAndWait()</span></div><div class='line' id='LC59'><span class="sd"> * @method unknown  addScript()</span></div><div class='line' id='LC60'><span class="sd"> * @method unknown  addScriptAndWait()</span></div><div class='line' id='LC61'><span class="sd"> * @method unknown  addSelection()</span></div><div class='line' id='LC62'><span class="sd"> * @method unknown  addSelectionAndWait()</span></div><div class='line' id='LC63'><span class="sd"> * @method unknown  allowNativeXpath()</span></div><div class='line' id='LC64'><span class="sd"> * @method unknown  allowNativeXpathAndWait()</span></div><div class='line' id='LC65'><span class="sd"> * @method unknown  altKeyDown()</span></div><div class='line' id='LC66'><span class="sd"> * @method unknown  altKeyDownAndWait()</span></div><div class='line' id='LC67'><span class="sd"> * @method unknown  altKeyUp()</span></div><div class='line' id='LC68'><span class="sd"> * @method unknown  altKeyUpAndWait()</span></div><div class='line' id='LC69'><span class="sd"> * @method unknown  answerOnNextPrompt()</span></div><div class='line' id='LC70'><span class="sd"> * @method unknown  assignId()</span></div><div class='line' id='LC71'><span class="sd"> * @method unknown  assignIdAndWait()</span></div><div class='line' id='LC72'><span class="sd"> * @method unknown  assertAlert</span></div><div class='line' id='LC73'><span class="sd"> * @method unknown  assertAlertNotPresent</span></div><div class='line' id='LC74'><span class="sd"> * @method unknown  assertAlertPresent</span></div><div class='line' id='LC75'><span class="sd"> * @method unknown  assertAllButtons</span></div><div class='line' id='LC76'><span class="sd"> * @method unknown  assertAllFields</span></div><div class='line' id='LC77'><span class="sd"> * @method unknown  assertAllLinks</span></div><div class='line' id='LC78'><span class="sd"> * @method unknown  assertAllWindowIds</span></div><div class='line' id='LC79'><span class="sd"> * @method unknown  assertAllWindowNames</span></div><div class='line' id='LC80'><span class="sd"> * @method unknown  assertAllWindowTitles</span></div><div class='line' id='LC81'><span class="sd"> * @method unknown  assertAttribute</span></div><div class='line' id='LC82'><span class="sd"> * @method unknown  assertAttributeFromAllWindows</span></div><div class='line' id='LC83'><span class="sd"> * @method unknown  assertBodyText</span></div><div class='line' id='LC84'><span class="sd"> * @method unknown  assertChecked</span></div><div class='line' id='LC85'><span class="sd"> * @method unknown  assertConfirmation</span></div><div class='line' id='LC86'><span class="sd"> * @method unknown  assertConfirmationNotPresent</span></div><div class='line' id='LC87'><span class="sd"> * @method unknown  assertConfirmationPresent</span></div><div class='line' id='LC88'><span class="sd"> * @method unknown  assertCookie</span></div><div class='line' id='LC89'><span class="sd"> * @method unknown  assertCookieByName</span></div><div class='line' id='LC90'><span class="sd"> * @method unknown  assertCookieNotPresent</span></div><div class='line' id='LC91'><span class="sd"> * @method unknown  assertCookiePresent</span></div><div class='line' id='LC92'><span class="sd"> * @method unknown  assertCssCount</span></div><div class='line' id='LC93'><span class="sd"> * @method unknown  assertCursorPosition</span></div><div class='line' id='LC94'><span class="sd"> * @method unknown  assertEditable</span></div><div class='line' id='LC95'><span class="sd"> * @method unknown  assertElementHeight</span></div><div class='line' id='LC96'><span class="sd"> * @method unknown  assertElementIndex</span></div><div class='line' id='LC97'><span class="sd"> * @method unknown  assertElementNotPresent</span></div><div class='line' id='LC98'><span class="sd"> * @method unknown  assertElementPositionLeft</span></div><div class='line' id='LC99'><span class="sd"> * @method unknown  assertElementPositionTop</span></div><div class='line' id='LC100'><span class="sd"> * @method unknown  assertElementPresent</span></div><div class='line' id='LC101'><span class="sd"> * @method unknown  assertElementWidth</span></div><div class='line' id='LC102'><span class="sd"> * @method unknown  assertEval</span></div><div class='line' id='LC103'><span class="sd"> * @method unknown  assertExpression</span></div><div class='line' id='LC104'><span class="sd"> * @method unknown  assertHtmlSource</span></div><div class='line' id='LC105'><span class="sd"> * @method unknown  assertLocation</span></div><div class='line' id='LC106'><span class="sd"> * @method unknown  assertLogMessages</span></div><div class='line' id='LC107'><span class="sd"> * @method unknown  assertMouseSpeed</span></div><div class='line' id='LC108'><span class="sd"> * @method unknown  assertNotAlert</span></div><div class='line' id='LC109'><span class="sd"> * @method unknown  assertNotAllButtons</span></div><div class='line' id='LC110'><span class="sd"> * @method unknown  assertNotAllFields</span></div><div class='line' id='LC111'><span class="sd"> * @method unknown  assertNotAllLinks</span></div><div class='line' id='LC112'><span class="sd"> * @method unknown  assertNotAllWindowIds</span></div><div class='line' id='LC113'><span class="sd"> * @method unknown  assertNotAllWindowNames</span></div><div class='line' id='LC114'><span class="sd"> * @method unknown  assertNotAllWindowTitles</span></div><div class='line' id='LC115'><span class="sd"> * @method unknown  assertNotAttribute</span></div><div class='line' id='LC116'><span class="sd"> * @method unknown  assertNotAttributeFromAllWindows</span></div><div class='line' id='LC117'><span class="sd"> * @method unknown  assertNotBodyText</span></div><div class='line' id='LC118'><span class="sd"> * @method unknown  assertNotChecked</span></div><div class='line' id='LC119'><span class="sd"> * @method unknown  assertNotConfirmation</span></div><div class='line' id='LC120'><span class="sd"> * @method unknown  assertNotCookie</span></div><div class='line' id='LC121'><span class="sd"> * @method unknown  assertNotCookieByName</span></div><div class='line' id='LC122'><span class="sd"> * @method unknown  assertNotCssCount</span></div><div class='line' id='LC123'><span class="sd"> * @method unknown  assertNotCursorPosition</span></div><div class='line' id='LC124'><span class="sd"> * @method unknown  assertNotEditable</span></div><div class='line' id='LC125'><span class="sd"> * @method unknown  assertNotElementHeight</span></div><div class='line' id='LC126'><span class="sd"> * @method unknown  assertNotElementIndex</span></div><div class='line' id='LC127'><span class="sd"> * @method unknown  assertNotElementPositionLeft</span></div><div class='line' id='LC128'><span class="sd"> * @method unknown  assertNotElementPositionTop</span></div><div class='line' id='LC129'><span class="sd"> * @method unknown  assertNotElementWidth</span></div><div class='line' id='LC130'><span class="sd"> * @method unknown  assertNotEval</span></div><div class='line' id='LC131'><span class="sd"> * @method unknown  assertNotExpression</span></div><div class='line' id='LC132'><span class="sd"> * @method unknown  assertNotHtmlSource</span></div><div class='line' id='LC133'><span class="sd"> * @method unknown  assertNotLocation</span></div><div class='line' id='LC134'><span class="sd"> * @method unknown  assertNotLogMessages</span></div><div class='line' id='LC135'><span class="sd"> * @method unknown  assertNotMouseSpeed</span></div><div class='line' id='LC136'><span class="sd"> * @method unknown  assertNotOrdered</span></div><div class='line' id='LC137'><span class="sd"> * @method unknown  assertNotPrompt</span></div><div class='line' id='LC138'><span class="sd"> * @method unknown  assertNotSelectOptions</span></div><div class='line' id='LC139'><span class="sd"> * @method unknown  assertNotSelectedId</span></div><div class='line' id='LC140'><span class="sd"> * @method unknown  assertNotSelectedIds</span></div><div class='line' id='LC141'><span class="sd"> * @method unknown  assertNotSelectedIndex</span></div><div class='line' id='LC142'><span class="sd"> * @method unknown  assertNotSelectedIndexes</span></div><div class='line' id='LC143'><span class="sd"> * @method unknown  assertNotSelectedLabel</span></div><div class='line' id='LC144'><span class="sd"> * @method unknown  assertNotSelectedLabels</span></div><div class='line' id='LC145'><span class="sd"> * @method unknown  assertNotSelectedValue</span></div><div class='line' id='LC146'><span class="sd"> * @method unknown  assertNotSelectedValues</span></div><div class='line' id='LC147'><span class="sd"> * @method unknown  assertNotSomethingSelected</span></div><div class='line' id='LC148'><span class="sd"> * @method unknown  assertNotSpeed</span></div><div class='line' id='LC149'><span class="sd"> * @method unknown  assertNotSpeedAndWait</span></div><div class='line' id='LC150'><span class="sd"> * @method unknown  assertNotTable</span></div><div class='line' id='LC151'><span class="sd"> * @method unknown  assertNotText</span></div><div class='line' id='LC152'><span class="sd"> * @method unknown  assertNotTitle</span></div><div class='line' id='LC153'><span class="sd"> * @method unknown  assertNotValue</span></div><div class='line' id='LC154'><span class="sd"> * @method unknown  assertNotVisible</span></div><div class='line' id='LC155'><span class="sd"> * @method unknown  assertNotWhetherThisFrameMatchFrameExpression</span></div><div class='line' id='LC156'><span class="sd"> * @method unknown  assertNotWhetherThisWindowMatchWindowExpression</span></div><div class='line' id='LC157'><span class="sd"> * @method unknown  assertNotXpathCount</span></div><div class='line' id='LC158'><span class="sd"> * @method unknown  assertOrdered</span></div><div class='line' id='LC159'><span class="sd"> * @method unknown  assertPrompt</span></div><div class='line' id='LC160'><span class="sd"> * @method unknown  assertPromptNotPresent</span></div><div class='line' id='LC161'><span class="sd"> * @method unknown  assertPromptPresent</span></div><div class='line' id='LC162'><span class="sd"> * @method unknown  assertSelectOptions</span></div><div class='line' id='LC163'><span class="sd"> * @method unknown  assertSelectedId</span></div><div class='line' id='LC164'><span class="sd"> * @method unknown  assertSelectedIds</span></div><div class='line' id='LC165'><span class="sd"> * @method unknown  assertSelectedIndex</span></div><div class='line' id='LC166'><span class="sd"> * @method unknown  assertSelectedIndexes</span></div><div class='line' id='LC167'><span class="sd"> * @method unknown  assertSelectedLabel</span></div><div class='line' id='LC168'><span class="sd"> * @method unknown  assertSelectedLabels</span></div><div class='line' id='LC169'><span class="sd"> * @method unknown  assertSelectedValue</span></div><div class='line' id='LC170'><span class="sd"> * @method unknown  assertSelectedValues</span></div><div class='line' id='LC171'><span class="sd"> * @method unknown  assertSomethingSelected</span></div><div class='line' id='LC172'><span class="sd"> * @method unknown  assertSpeed</span></div><div class='line' id='LC173'><span class="sd"> * @method unknown  assertSpeedAndWait</span></div><div class='line' id='LC174'><span class="sd"> * @method unknown  assertTable</span></div><div class='line' id='LC175'><span class="sd"> * @method unknown  assertText</span></div><div class='line' id='LC176'><span class="sd"> * @method unknown  assertTextNotPresent</span></div><div class='line' id='LC177'><span class="sd"> * @method unknown  assertTextPresent</span></div><div class='line' id='LC178'><span class="sd"> * @method unknown  assertTitle</span></div><div class='line' id='LC179'><span class="sd"> * @method unknown  assertValue</span></div><div class='line' id='LC180'><span class="sd"> * @method unknown  assertVisible</span></div><div class='line' id='LC181'><span class="sd"> * @method unknown  assertWhetherThisFrameMatchFrameExpression</span></div><div class='line' id='LC182'><span class="sd"> * @method unknown  assertWhetherThisWindowMatchWindowExpression</span></div><div class='line' id='LC183'><span class="sd"> * @method unknown  assertXpathCount</span></div><div class='line' id='LC184'><span class="sd"> * @method unknown  attachFile()</span></div><div class='line' id='LC185'><span class="sd"> * @method unknown  break()</span></div><div class='line' id='LC186'><span class="sd"> * @method unknown  captureEntirePageScreenshot()</span></div><div class='line' id='LC187'><span class="sd"> * @method unknown  captureEntirePageScreenshotAndWait()</span></div><div class='line' id='LC188'><span class="sd"> * @method unknown  captureEntirePageScreenshotToStringAndWait()</span></div><div class='line' id='LC189'><span class="sd"> * @method unknown  captureScreenshotAndWait()</span></div><div class='line' id='LC190'><span class="sd"> * @method unknown  captureScreenshotToStringAndWait()</span></div><div class='line' id='LC191'><span class="sd"> * @method unknown  check()</span></div><div class='line' id='LC192'><span class="sd"> * @method unknown  checkAndWait()</span></div><div class='line' id='LC193'><span class="sd"> * @method unknown  chooseCancelOnNextConfirmation()</span></div><div class='line' id='LC194'><span class="sd"> * @method unknown  chooseCancelOnNextConfirmationAndWait()</span></div><div class='line' id='LC195'><span class="sd"> * @method unknown  chooseOkOnNextConfirmation()</span></div><div class='line' id='LC196'><span class="sd"> * @method unknown  chooseOkOnNextConfirmationAndWait()</span></div><div class='line' id='LC197'><span class="sd"> * @method unknown  click()</span></div><div class='line' id='LC198'><span class="sd"> * @method unknown  clickAndWait()</span></div><div class='line' id='LC199'><span class="sd"> * @method unknown  clickAt()</span></div><div class='line' id='LC200'><span class="sd"> * @method unknown  clickAtAndWait()</span></div><div class='line' id='LC201'><span class="sd"> * @method unknown  close()</span></div><div class='line' id='LC202'><span class="sd"> * @method unknown  contextMenu()</span></div><div class='line' id='LC203'><span class="sd"> * @method unknown  contextMenuAndWait()</span></div><div class='line' id='LC204'><span class="sd"> * @method unknown  contextMenuAt()</span></div><div class='line' id='LC205'><span class="sd"> * @method unknown  contextMenuAtAndWait()</span></div><div class='line' id='LC206'><span class="sd"> * @method unknown  controlKeyDown()</span></div><div class='line' id='LC207'><span class="sd"> * @method unknown  controlKeyDownAndWait()</span></div><div class='line' id='LC208'><span class="sd"> * @method unknown  controlKeyUp()</span></div><div class='line' id='LC209'><span class="sd"> * @method unknown  controlKeyUpAndWait()</span></div><div class='line' id='LC210'><span class="sd"> * @method unknown  createCookie()</span></div><div class='line' id='LC211'><span class="sd"> * @method unknown  createCookieAndWait()</span></div><div class='line' id='LC212'><span class="sd"> * @method unknown  deleteAllVisibleCookies()</span></div><div class='line' id='LC213'><span class="sd"> * @method unknown  deleteAllVisibleCookiesAndWait()</span></div><div class='line' id='LC214'><span class="sd"> * @method unknown  deleteCookie()</span></div><div class='line' id='LC215'><span class="sd"> * @method unknown  deleteCookieAndWait()</span></div><div class='line' id='LC216'><span class="sd"> * @method unknown  deselectPopUp()</span></div><div class='line' id='LC217'><span class="sd"> * @method unknown  deselectPopUpAndWait()</span></div><div class='line' id='LC218'><span class="sd"> * @method unknown  doubleClick()</span></div><div class='line' id='LC219'><span class="sd"> * @method unknown  doubleClickAndWait()</span></div><div class='line' id='LC220'><span class="sd"> * @method unknown  doubleClickAt()</span></div><div class='line' id='LC221'><span class="sd"> * @method unknown  doubleClickAtAndWait()</span></div><div class='line' id='LC222'><span class="sd"> * @method unknown  dragAndDrop()</span></div><div class='line' id='LC223'><span class="sd"> * @method unknown  dragAndDropAndWait()</span></div><div class='line' id='LC224'><span class="sd"> * @method unknown  dragAndDropToObject()</span></div><div class='line' id='LC225'><span class="sd"> * @method unknown  dragAndDropToObjectAndWait()</span></div><div class='line' id='LC226'><span class="sd"> * @method unknown  dragDrop()</span></div><div class='line' id='LC227'><span class="sd"> * @method unknown  dragDropAndWait()</span></div><div class='line' id='LC228'><span class="sd"> * @method unknown  echo()</span></div><div class='line' id='LC229'><span class="sd"> * @method unknown  fireEvent()</span></div><div class='line' id='LC230'><span class="sd"> * @method unknown  fireEventAndWait()</span></div><div class='line' id='LC231'><span class="sd"> * @method unknown  focus()</span></div><div class='line' id='LC232'><span class="sd"> * @method unknown  focusAndWait()</span></div><div class='line' id='LC233'><span class="sd"> * @method string   getAlert()</span></div><div class='line' id='LC234'><span class="sd"> * @method array    getAllButtons()</span></div><div class='line' id='LC235'><span class="sd"> * @method array    getAllFields()</span></div><div class='line' id='LC236'><span class="sd"> * @method array    getAllLinks()</span></div><div class='line' id='LC237'><span class="sd"> * @method array    getAllWindowIds()</span></div><div class='line' id='LC238'><span class="sd"> * @method array    getAllWindowNames()</span></div><div class='line' id='LC239'><span class="sd"> * @method array    getAllWindowTitles()</span></div><div class='line' id='LC240'><span class="sd"> * @method string   getAttribute()</span></div><div class='line' id='LC241'><span class="sd"> * @method array    getAttributeFromAllWindows()</span></div><div class='line' id='LC242'><span class="sd"> * @method string   getBodyText()</span></div><div class='line' id='LC243'><span class="sd"> * @method string   getConfirmation()</span></div><div class='line' id='LC244'><span class="sd"> * @method string   getCookie()</span></div><div class='line' id='LC245'><span class="sd"> * @method string   getCookieByName()</span></div><div class='line' id='LC246'><span class="sd"> * @method integer  getCursorPosition()</span></div><div class='line' id='LC247'><span class="sd"> * @method integer  getElementHeight()</span></div><div class='line' id='LC248'><span class="sd"> * @method integer  getElementIndex()</span></div><div class='line' id='LC249'><span class="sd"> * @method integer  getElementPositionLeft()</span></div><div class='line' id='LC250'><span class="sd"> * @method integer  getElementPositionTop()</span></div><div class='line' id='LC251'><span class="sd"> * @method integer  getElementWidth()</span></div><div class='line' id='LC252'><span class="sd"> * @method string   getEval()</span></div><div class='line' id='LC253'><span class="sd"> * @method string   getExpression()</span></div><div class='line' id='LC254'><span class="sd"> * @method string   getHtmlSource()</span></div><div class='line' id='LC255'><span class="sd"> * @method string   getLocation()</span></div><div class='line' id='LC256'><span class="sd"> * @method string   getLogMessages()</span></div><div class='line' id='LC257'><span class="sd"> * @method integer  getMouseSpeed()</span></div><div class='line' id='LC258'><span class="sd"> * @method string   getPrompt()</span></div><div class='line' id='LC259'><span class="sd"> * @method array    getSelectOptions()</span></div><div class='line' id='LC260'><span class="sd"> * @method string   getSelectedId()</span></div><div class='line' id='LC261'><span class="sd"> * @method array    getSelectedIds()</span></div><div class='line' id='LC262'><span class="sd"> * @method string   getSelectedIndex()</span></div><div class='line' id='LC263'><span class="sd"> * @method array    getSelectedIndexes()</span></div><div class='line' id='LC264'><span class="sd"> * @method string   getSelectedLabel()</span></div><div class='line' id='LC265'><span class="sd"> * @method array    getSelectedLabels()</span></div><div class='line' id='LC266'><span class="sd"> * @method string   getSelectedValue()</span></div><div class='line' id='LC267'><span class="sd"> * @method array    getSelectedValues()</span></div><div class='line' id='LC268'><span class="sd"> * @method unknown  getSpeed()</span></div><div class='line' id='LC269'><span class="sd"> * @method unknown  getSpeedAndWait()</span></div><div class='line' id='LC270'><span class="sd"> * @method string   getTable()</span></div><div class='line' id='LC271'><span class="sd"> * @method string   getText()</span></div><div class='line' id='LC272'><span class="sd"> * @method string   getTitle()</span></div><div class='line' id='LC273'><span class="sd"> * @method string   getValue()</span></div><div class='line' id='LC274'><span class="sd"> * @method boolean  getWhetherThisFrameMatchFrameExpression()</span></div><div class='line' id='LC275'><span class="sd"> * @method boolean  getWhetherThisWindowMatchWindowExpression()</span></div><div class='line' id='LC276'><span class="sd"> * @method integer  getXpathCount()</span></div><div class='line' id='LC277'><span class="sd"> * @method unknown  goBack()</span></div><div class='line' id='LC278'><span class="sd"> * @method unknown  goBackAndWait()</span></div><div class='line' id='LC279'><span class="sd"> * @method unknown  highlight()</span></div><div class='line' id='LC280'><span class="sd"> * @method unknown  highlightAndWait()</span></div><div class='line' id='LC281'><span class="sd"> * @method unknown  ignoreAttributesWithoutValue()</span></div><div class='line' id='LC282'><span class="sd"> * @method unknown  ignoreAttributesWithoutValueAndWait()</span></div><div class='line' id='LC283'><span class="sd"> * @method boolean  isAlertPresent()</span></div><div class='line' id='LC284'><span class="sd"> * @method boolean  isChecked()</span></div><div class='line' id='LC285'><span class="sd"> * @method boolean  isConfirmationPresent()</span></div><div class='line' id='LC286'><span class="sd"> * @method boolean  isCookiePresent()</span></div><div class='line' id='LC287'><span class="sd"> * @method boolean  isEditable()</span></div><div class='line' id='LC288'><span class="sd"> * @method boolean  isElementPresent()</span></div><div class='line' id='LC289'><span class="sd"> * @method boolean  isOrdered()</span></div><div class='line' id='LC290'><span class="sd"> * @method boolean  isPromptPresent()</span></div><div class='line' id='LC291'><span class="sd"> * @method boolean  isSomethingSelected()</span></div><div class='line' id='LC292'><span class="sd"> * @method boolean  isTextPresent()</span></div><div class='line' id='LC293'><span class="sd"> * @method boolean  isVisible()</span></div><div class='line' id='LC294'><span class="sd"> * @method unknown  keyDown()</span></div><div class='line' id='LC295'><span class="sd"> * @method unknown  keyDownAndWait()</span></div><div class='line' id='LC296'><span class="sd"> * @method unknown  keyDownNative()</span></div><div class='line' id='LC297'><span class="sd"> * @method unknown  keyDownNativeAndWait()</span></div><div class='line' id='LC298'><span class="sd"> * @method unknown  keyPress()</span></div><div class='line' id='LC299'><span class="sd"> * @method unknown  keyPressAndWait()</span></div><div class='line' id='LC300'><span class="sd"> * @method unknown  keyPressNative()</span></div><div class='line' id='LC301'><span class="sd"> * @method unknown  keyPressNativeAndWait()</span></div><div class='line' id='LC302'><span class="sd"> * @method unknown  keyUp()</span></div><div class='line' id='LC303'><span class="sd"> * @method unknown  keyUpAndWait()</span></div><div class='line' id='LC304'><span class="sd"> * @method unknown  keyUpNative()</span></div><div class='line' id='LC305'><span class="sd"> * @method unknown  keyUpNativeAndWait()</span></div><div class='line' id='LC306'><span class="sd"> * @method unknown  metaKeyDown()</span></div><div class='line' id='LC307'><span class="sd"> * @method unknown  metaKeyDownAndWait()</span></div><div class='line' id='LC308'><span class="sd"> * @method unknown  metaKeyUp()</span></div><div class='line' id='LC309'><span class="sd"> * @method unknown  metaKeyUpAndWait()</span></div><div class='line' id='LC310'><span class="sd"> * @method unknown  mouseDown()</span></div><div class='line' id='LC311'><span class="sd"> * @method unknown  mouseDownAndWait()</span></div><div class='line' id='LC312'><span class="sd"> * @method unknown  mouseDownAt()</span></div><div class='line' id='LC313'><span class="sd"> * @method unknown  mouseDownAtAndWait()</span></div><div class='line' id='LC314'><span class="sd"> * @method unknown  mouseMove()</span></div><div class='line' id='LC315'><span class="sd"> * @method unknown  mouseMoveAndWait()</span></div><div class='line' id='LC316'><span class="sd"> * @method unknown  mouseMoveAt()</span></div><div class='line' id='LC317'><span class="sd"> * @method unknown  mouseMoveAtAndWait()</span></div><div class='line' id='LC318'><span class="sd"> * @method unknown  mouseOut()</span></div><div class='line' id='LC319'><span class="sd"> * @method unknown  mouseOutAndWait()</span></div><div class='line' id='LC320'><span class="sd"> * @method unknown  mouseOver()</span></div><div class='line' id='LC321'><span class="sd"> * @method unknown  mouseOverAndWait()</span></div><div class='line' id='LC322'><span class="sd"> * @method unknown  mouseUp()</span></div><div class='line' id='LC323'><span class="sd"> * @method unknown  mouseUpAndWait()</span></div><div class='line' id='LC324'><span class="sd"> * @method unknown  mouseUpAt()</span></div><div class='line' id='LC325'><span class="sd"> * @method unknown  mouseUpAtAndWait()</span></div><div class='line' id='LC326'><span class="sd"> * @method unknown  mouseUpRight()</span></div><div class='line' id='LC327'><span class="sd"> * @method unknown  mouseUpRightAndWait()</span></div><div class='line' id='LC328'><span class="sd"> * @method unknown  mouseUpRightAt()</span></div><div class='line' id='LC329'><span class="sd"> * @method unknown  mouseUpRightAtAndWait()</span></div><div class='line' id='LC330'><span class="sd"> * @method unknown  open()</span></div><div class='line' id='LC331'><span class="sd"> * @method unknown  openWindow()</span></div><div class='line' id='LC332'><span class="sd"> * @method unknown  openWindowAndWait()</span></div><div class='line' id='LC333'><span class="sd"> * @method unknown  pause()</span></div><div class='line' id='LC334'><span class="sd"> * @method unknown  refresh()</span></div><div class='line' id='LC335'><span class="sd"> * @method unknown  refreshAndWait()</span></div><div class='line' id='LC336'><span class="sd"> * @method unknown  removeAllSelections()</span></div><div class='line' id='LC337'><span class="sd"> * @method unknown  removeAllSelectionsAndWait()</span></div><div class='line' id='LC338'><span class="sd"> * @method unknown  removeScript()</span></div><div class='line' id='LC339'><span class="sd"> * @method unknown  removeScriptAndWait()</span></div><div class='line' id='LC340'><span class="sd"> * @method unknown  removeSelection()</span></div><div class='line' id='LC341'><span class="sd"> * @method unknown  removeSelectionAndWait()</span></div><div class='line' id='LC342'><span class="sd"> * @method unknown  retrieveLastRemoteControlLogs()</span></div><div class='line' id='LC343'><span class="sd"> * @method unknown  rollup()</span></div><div class='line' id='LC344'><span class="sd"> * @method unknown  rollupAndWait()</span></div><div class='line' id='LC345'><span class="sd"> * @method unknown  runScript()</span></div><div class='line' id='LC346'><span class="sd"> * @method unknown  runScriptAndWait()</span></div><div class='line' id='LC347'><span class="sd"> * @method unknown  select()</span></div><div class='line' id='LC348'><span class="sd"> * @method unknown  selectAndWait()</span></div><div class='line' id='LC349'><span class="sd"> * @method unknown  selectFrame()</span></div><div class='line' id='LC350'><span class="sd"> * @method unknown  selectPopUp()</span></div><div class='line' id='LC351'><span class="sd"> * @method unknown  selectPopUpAndWait()</span></div><div class='line' id='LC352'><span class="sd"> * @method unknown  selectWindow()</span></div><div class='line' id='LC353'><span class="sd"> * @method unknown  setBrowserLogLevel()</span></div><div class='line' id='LC354'><span class="sd"> * @method unknown  setBrowserLogLevelAndWait()</span></div><div class='line' id='LC355'><span class="sd"> * @method unknown  setContext()</span></div><div class='line' id='LC356'><span class="sd"> * @method unknown  setCursorPosition()</span></div><div class='line' id='LC357'><span class="sd"> * @method unknown  setCursorPositionAndWait()</span></div><div class='line' id='LC358'><span class="sd"> * @method unknown  setMouseSpeed()</span></div><div class='line' id='LC359'><span class="sd"> * @method unknown  setMouseSpeedAndWait()</span></div><div class='line' id='LC360'><span class="sd"> * @method unknown  setSpeed()</span></div><div class='line' id='LC361'><span class="sd"> * @method unknown  setSpeedAndWait()</span></div><div class='line' id='LC362'><span class="sd"> * @method unknown  shiftKeyDown()</span></div><div class='line' id='LC363'><span class="sd"> * @method unknown  shiftKeyDownAndWait()</span></div><div class='line' id='LC364'><span class="sd"> * @method unknown  shiftKeyUp()</span></div><div class='line' id='LC365'><span class="sd"> * @method unknown  shiftKeyUpAndWait()</span></div><div class='line' id='LC366'><span class="sd"> * @method unknown  shutDownSeleniumServer()</span></div><div class='line' id='LC367'><span class="sd"> * @method unknown  store()</span></div><div class='line' id='LC368'><span class="sd"> * @method unknown  submit()</span></div><div class='line' id='LC369'><span class="sd"> * @method unknown  submitAndWait()</span></div><div class='line' id='LC370'><span class="sd"> * @method unknown  type()</span></div><div class='line' id='LC371'><span class="sd"> * @method unknown  typeAndWait()</span></div><div class='line' id='LC372'><span class="sd"> * @method unknown  typeKeys()</span></div><div class='line' id='LC373'><span class="sd"> * @method unknown  typeKeysAndWait()</span></div><div class='line' id='LC374'><span class="sd"> * @method unknown  uncheck()</span></div><div class='line' id='LC375'><span class="sd"> * @method unknown  uncheckAndWait()</span></div><div class='line' id='LC376'><span class="sd"> * @method unknown  useXpathLibrary()</span></div><div class='line' id='LC377'><span class="sd"> * @method unknown  useXpathLibraryAndWait()</span></div><div class='line' id='LC378'><span class="sd"> * @method unknown  waitForAlert</span></div><div class='line' id='LC379'><span class="sd"> * @method unknown  waitForAlertNotPresent</span></div><div class='line' id='LC380'><span class="sd"> * @method unknown  waitForAlertPresent</span></div><div class='line' id='LC381'><span class="sd"> * @method unknown  waitForAllButtons</span></div><div class='line' id='LC382'><span class="sd"> * @method unknown  waitForAllFields</span></div><div class='line' id='LC383'><span class="sd"> * @method unknown  waitForAllLinks</span></div><div class='line' id='LC384'><span class="sd"> * @method unknown  waitForAllWindowIds</span></div><div class='line' id='LC385'><span class="sd"> * @method unknown  waitForAllWindowNames</span></div><div class='line' id='LC386'><span class="sd"> * @method unknown  waitForAllWindowTitles</span></div><div class='line' id='LC387'><span class="sd"> * @method unknown  waitForAttribute</span></div><div class='line' id='LC388'><span class="sd"> * @method unknown  waitForAttributeFromAllWindows</span></div><div class='line' id='LC389'><span class="sd"> * @method unknown  waitForBodyText</span></div><div class='line' id='LC390'><span class="sd"> * @method unknown  waitForChecked</span></div><div class='line' id='LC391'><span class="sd"> * @method unknown  waitForCondition()</span></div><div class='line' id='LC392'><span class="sd"> * @method unknown  waitForConfirmation</span></div><div class='line' id='LC393'><span class="sd"> * @method unknown  waitForConfirmationNotPresent</span></div><div class='line' id='LC394'><span class="sd"> * @method unknown  waitForConfirmationPresent</span></div><div class='line' id='LC395'><span class="sd"> * @method unknown  waitForCookie</span></div><div class='line' id='LC396'><span class="sd"> * @method unknown  waitForCookieByName</span></div><div class='line' id='LC397'><span class="sd"> * @method unknown  waitForCookieNotPresent</span></div><div class='line' id='LC398'><span class="sd"> * @method unknown  waitForCookiePresent</span></div><div class='line' id='LC399'><span class="sd"> * @method unknown  waitForCssCount</span></div><div class='line' id='LC400'><span class="sd"> * @method unknown  waitForCursorPosition</span></div><div class='line' id='LC401'><span class="sd"> * @method unknown  waitForEditable</span></div><div class='line' id='LC402'><span class="sd"> * @method unknown  waitForElementHeight</span></div><div class='line' id='LC403'><span class="sd"> * @method unknown  waitForElementIndex</span></div><div class='line' id='LC404'><span class="sd"> * @method unknown  waitForElementNotPresent</span></div><div class='line' id='LC405'><span class="sd"> * @method unknown  waitForElementPositionLeft</span></div><div class='line' id='LC406'><span class="sd"> * @method unknown  waitForElementPositionTop</span></div><div class='line' id='LC407'><span class="sd"> * @method unknown  waitForElementPresent</span></div><div class='line' id='LC408'><span class="sd"> * @method unknown  waitForElementWidth</span></div><div class='line' id='LC409'><span class="sd"> * @method unknown  waitForEval</span></div><div class='line' id='LC410'><span class="sd"> * @method unknown  waitForExpression</span></div><div class='line' id='LC411'><span class="sd"> * @method unknown  waitForHtmlSource</span></div><div class='line' id='LC412'><span class="sd"> * @method unknown  waitForLocation</span></div><div class='line' id='LC413'><span class="sd"> * @method unknown  waitForLogMessages</span></div><div class='line' id='LC414'><span class="sd"> * @method unknown  waitForMouseSpeed</span></div><div class='line' id='LC415'><span class="sd"> * @method unknown  waitForNotAlert</span></div><div class='line' id='LC416'><span class="sd"> * @method unknown  waitForNotAllButtons</span></div><div class='line' id='LC417'><span class="sd"> * @method unknown  waitForNotAllFields</span></div><div class='line' id='LC418'><span class="sd"> * @method unknown  waitForNotAllLinks</span></div><div class='line' id='LC419'><span class="sd"> * @method unknown  waitForNotAllWindowIds</span></div><div class='line' id='LC420'><span class="sd"> * @method unknown  waitForNotAllWindowNames</span></div><div class='line' id='LC421'><span class="sd"> * @method unknown  waitForNotAllWindowTitles</span></div><div class='line' id='LC422'><span class="sd"> * @method unknown  waitForNotAttribute</span></div><div class='line' id='LC423'><span class="sd"> * @method unknown  waitForNotAttributeFromAllWindows</span></div><div class='line' id='LC424'><span class="sd"> * @method unknown  waitForNotBodyText</span></div><div class='line' id='LC425'><span class="sd"> * @method unknown  waitForNotChecked</span></div><div class='line' id='LC426'><span class="sd"> * @method unknown  waitForNotConfirmation</span></div><div class='line' id='LC427'><span class="sd"> * @method unknown  waitForNotCookie</span></div><div class='line' id='LC428'><span class="sd"> * @method unknown  waitForNotCookieByName</span></div><div class='line' id='LC429'><span class="sd"> * @method unknown  waitForNotCssCount</span></div><div class='line' id='LC430'><span class="sd"> * @method unknown  waitForNotCursorPosition</span></div><div class='line' id='LC431'><span class="sd"> * @method unknown  waitForNotEditable</span></div><div class='line' id='LC432'><span class="sd"> * @method unknown  waitForNotElementHeight</span></div><div class='line' id='LC433'><span class="sd"> * @method unknown  waitForNotElementIndex</span></div><div class='line' id='LC434'><span class="sd"> * @method unknown  waitForNotElementPositionLeft</span></div><div class='line' id='LC435'><span class="sd"> * @method unknown  waitForNotElementPositionTop</span></div><div class='line' id='LC436'><span class="sd"> * @method unknown  waitForNotElementWidth</span></div><div class='line' id='LC437'><span class="sd"> * @method unknown  waitForNotEval</span></div><div class='line' id='LC438'><span class="sd"> * @method unknown  waitForNotExpression</span></div><div class='line' id='LC439'><span class="sd"> * @method unknown  waitForNotHtmlSource</span></div><div class='line' id='LC440'><span class="sd"> * @method unknown  waitForNotLocation</span></div><div class='line' id='LC441'><span class="sd"> * @method unknown  waitForNotLogMessages</span></div><div class='line' id='LC442'><span class="sd"> * @method unknown  waitForNotMouseSpeed</span></div><div class='line' id='LC443'><span class="sd"> * @method unknown  waitForNotOrdered</span></div><div class='line' id='LC444'><span class="sd"> * @method unknown  waitForNotPrompt</span></div><div class='line' id='LC445'><span class="sd"> * @method unknown  waitForNotSelectOptions</span></div><div class='line' id='LC446'><span class="sd"> * @method unknown  waitForNotSelectedId</span></div><div class='line' id='LC447'><span class="sd"> * @method unknown  waitForNotSelectedIds</span></div><div class='line' id='LC448'><span class="sd"> * @method unknown  waitForNotSelectedIndex</span></div><div class='line' id='LC449'><span class="sd"> * @method unknown  waitForNotSelectedIndexes</span></div><div class='line' id='LC450'><span class="sd"> * @method unknown  waitForNotSelectedLabel</span></div><div class='line' id='LC451'><span class="sd"> * @method unknown  waitForNotSelectedLabels</span></div><div class='line' id='LC452'><span class="sd"> * @method unknown  waitForNotSelectedValue</span></div><div class='line' id='LC453'><span class="sd"> * @method unknown  waitForNotSelectedValues</span></div><div class='line' id='LC454'><span class="sd"> * @method unknown  waitForNotSomethingSelected</span></div><div class='line' id='LC455'><span class="sd"> * @method unknown  waitForNotSpeed</span></div><div class='line' id='LC456'><span class="sd"> * @method unknown  waitForNotSpeedAndWait</span></div><div class='line' id='LC457'><span class="sd"> * @method unknown  waitForNotTable</span></div><div class='line' id='LC458'><span class="sd"> * @method unknown  waitForNotText</span></div><div class='line' id='LC459'><span class="sd"> * @method unknown  waitForNotTitle</span></div><div class='line' id='LC460'><span class="sd"> * @method unknown  waitForNotValue</span></div><div class='line' id='LC461'><span class="sd"> * @method unknown  waitForNotVisible</span></div><div class='line' id='LC462'><span class="sd"> * @method unknown  waitForNotWhetherThisFrameMatchFrameExpression</span></div><div class='line' id='LC463'><span class="sd"> * @method unknown  waitForNotWhetherThisWindowMatchWindowExpression</span></div><div class='line' id='LC464'><span class="sd"> * @method unknown  waitForNotXpathCount</span></div><div class='line' id='LC465'><span class="sd"> * @method unknown  waitForOrdered</span></div><div class='line' id='LC466'><span class="sd"> * @method unknown  waitForPageToLoad()</span></div><div class='line' id='LC467'><span class="sd"> * @method unknown  waitForPopUp()</span></div><div class='line' id='LC468'><span class="sd"> * @method unknown  waitForPrompt</span></div><div class='line' id='LC469'><span class="sd"> * @method unknown  waitForPromptNotPresent</span></div><div class='line' id='LC470'><span class="sd"> * @method unknown  waitForPromptPresent</span></div><div class='line' id='LC471'><span class="sd"> * @method unknown  waitForSelectOptions</span></div><div class='line' id='LC472'><span class="sd"> * @method unknown  waitForSelectedId</span></div><div class='line' id='LC473'><span class="sd"> * @method unknown  waitForSelectedIds</span></div><div class='line' id='LC474'><span class="sd"> * @method unknown  waitForSelectedIndex</span></div><div class='line' id='LC475'><span class="sd"> * @method unknown  waitForSelectedIndexes</span></div><div class='line' id='LC476'><span class="sd"> * @method unknown  waitForSelectedLabel</span></div><div class='line' id='LC477'><span class="sd"> * @method unknown  waitForSelectedLabels</span></div><div class='line' id='LC478'><span class="sd"> * @method unknown  waitForSelectedValue</span></div><div class='line' id='LC479'><span class="sd"> * @method unknown  waitForSelectedValues</span></div><div class='line' id='LC480'><span class="sd"> * @method unknown  waitForSomethingSelected</span></div><div class='line' id='LC481'><span class="sd"> * @method unknown  waitForSpeed</span></div><div class='line' id='LC482'><span class="sd"> * @method unknown  waitForSpeedAndWait</span></div><div class='line' id='LC483'><span class="sd"> * @method unknown  waitForTable</span></div><div class='line' id='LC484'><span class="sd"> * @method unknown  waitForText</span></div><div class='line' id='LC485'><span class="sd"> * @method unknown  waitForTextNotPresent</span></div><div class='line' id='LC486'><span class="sd"> * @method unknown  waitForTextPresent</span></div><div class='line' id='LC487'><span class="sd"> * @method unknown  waitForTitle</span></div><div class='line' id='LC488'><span class="sd"> * @method unknown  waitForValue</span></div><div class='line' id='LC489'><span class="sd"> * @method unknown  waitForVisible</span></div><div class='line' id='LC490'><span class="sd"> * @method unknown  waitForWhetherThisFrameMatchFrameExpression</span></div><div class='line' id='LC491'><span class="sd"> * @method unknown  waitForWhetherThisWindowMatchWindowExpression</span></div><div class='line' id='LC492'><span class="sd"> * @method unknown  waitForXpathCount</span></div><div class='line' id='LC493'><span class="sd"> * @method unknown  windowFocus()</span></div><div class='line' id='LC494'><span class="sd"> * @method unknown  windowMaximize()</span></div><div class='line' id='LC495'><span class="sd"> */</span></div><div class='line' id='LC496'><span class="k">abstract</span> <span class="k">class</span> <span class="nc">PHPUnit_Extensions_SeleniumTestCase</span> <span class="k">extends</span> <span class="nx">PHPUnit_Framework_TestCase</span></div><div class='line' id='LC497'><span class="p">{</span></div><div class='line' id='LC498'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC499'><span class="sd">     * @var    array</span></div><div class='line' id='LC500'><span class="sd">     */</span></div><div class='line' id='LC501'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">static</span> <span class="nv">$browsers</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC502'><br/></div><div class='line' id='LC503'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC504'><span class="sd">     * @var    string</span></div><div class='line' id='LC505'><span class="sd">     */</span></div><div class='line' id='LC506'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$browserName</span><span class="p">;</span></div><div class='line' id='LC507'><br/></div><div class='line' id='LC508'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC509'><span class="sd">     * @var    boolean</span></div><div class='line' id='LC510'><span class="sd">     */</span></div><div class='line' id='LC511'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$collectCodeCoverageInformation</span> <span class="o">=</span> <span class="k">FALSE</span><span class="p">;</span></div><div class='line' id='LC512'><br/></div><div class='line' id='LC513'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC514'><span class="sd">     * @var    string</span></div><div class='line' id='LC515'><span class="sd">     */</span></div><div class='line' id='LC516'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$coverageScriptUrl</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC517'><br/></div><div class='line' id='LC518'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC519'><span class="sd">     * @var    PHPUnit_Extensions_SeleniumTestCase_Driver[]</span></div><div class='line' id='LC520'><span class="sd">     */</span></div><div class='line' id='LC521'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$drivers</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC522'><br/></div><div class='line' id='LC523'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC524'><span class="sd">     * @var    boolean</span></div><div class='line' id='LC525'><span class="sd">     */</span></div><div class='line' id='LC526'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$inDefaultAssertions</span> <span class="o">=</span> <span class="k">FALSE</span><span class="p">;</span></div><div class='line' id='LC527'><br/></div><div class='line' id='LC528'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC529'><span class="sd">     * @var    string</span></div><div class='line' id='LC530'><span class="sd">     */</span></div><div class='line' id='LC531'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$testId</span><span class="p">;</span></div><div class='line' id='LC532'><br/></div><div class='line' id='LC533'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC534'><span class="sd">     * @var    array</span></div><div class='line' id='LC535'><span class="sd">     * @access protected</span></div><div class='line' id='LC536'><span class="sd">     */</span></div><div class='line' id='LC537'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$verificationErrors</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC538'><br/></div><div class='line' id='LC539'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC540'><span class="sd">     * @var    boolean</span></div><div class='line' id='LC541'><span class="sd">     */</span></div><div class='line' id='LC542'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$captureScreenshotOnFailure</span> <span class="o">=</span> <span class="k">FALSE</span><span class="p">;</span></div><div class='line' id='LC543'><br/></div><div class='line' id='LC544'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC545'><span class="sd">     * @var    string</span></div><div class='line' id='LC546'><span class="sd">     */</span></div><div class='line' id='LC547'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$screenshotPath</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC548'><br/></div><div class='line' id='LC549'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC550'><span class="sd">     * @var    string</span></div><div class='line' id='LC551'><span class="sd">     */</span></div><div class='line' id='LC552'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$screenshotUrl</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC553'><br/></div><div class='line' id='LC554'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC555'><span class="sd">     * @var    integer  the number of seconds to wait before declaring</span></div><div class='line' id='LC556'><span class="sd">     *                  the Selenium server not reachable</span></div><div class='line' id='LC557'><span class="sd">     */</span></div><div class='line' id='LC558'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$serverConnectionTimeOut</span> <span class="o">=</span> <span class="mi">10</span><span class="p">;</span></div><div class='line' id='LC559'><br/></div><div class='line' id='LC560'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC561'><span class="sd">     * @var boolean</span></div><div class='line' id='LC562'><span class="sd">     */</span></div><div class='line' id='LC563'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="nv">$serverRunning</span><span class="p">;</span></div><div class='line' id='LC564'><br/></div><div class='line' id='LC565'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC566'><span class="sd">     * @var boolean</span></div><div class='line' id='LC567'><span class="sd">     */</span></div><div class='line' id='LC568'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="k">static</span> <span class="nv">$shareSession</span><span class="p">;</span></div><div class='line' id='LC569'><br/></div><div class='line' id='LC570'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC571'><span class="sd">     * The last sessionId used for running a test.</span></div><div class='line' id='LC572'><span class="sd">     * @var string</span></div><div class='line' id='LC573'><span class="sd">     */</span></div><div class='line' id='LC574'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="k">static</span> <span class="nv">$sessionId</span><span class="p">;</span></div><div class='line' id='LC575'><br/></div><div class='line' id='LC576'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC577'><span class="sd">     * @param boolean</span></div><div class='line' id='LC578'><span class="sd">     */</span></div><div class='line' id='LC579'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">shareSession</span><span class="p">(</span><span class="nv">$shareSession</span><span class="p">)</span></div><div class='line' id='LC580'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC581'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">self</span><span class="o">::</span><span class="nv">$shareSession</span> <span class="o">=</span> <span class="nv">$shareSession</span><span class="p">;</span></div><div class='line' id='LC582'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC583'><br/></div><div class='line' id='LC584'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC585'><span class="sd">     * @param  string $name</span></div><div class='line' id='LC586'><span class="sd">     * @param  array  $data</span></div><div class='line' id='LC587'><span class="sd">     * @param  string $dataName</span></div><div class='line' id='LC588'><span class="sd">     * @param  array  $browser</span></div><div class='line' id='LC589'><span class="sd">     * @throws InvalidArgumentException</span></div><div class='line' id='LC590'><span class="sd">     */</span></div><div class='line' id='LC591'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">__construct</span><span class="p">(</span><span class="nv">$name</span> <span class="o">=</span> <span class="k">NULL</span><span class="p">,</span> <span class="k">array</span> <span class="nv">$data</span> <span class="o">=</span> <span class="k">array</span><span class="p">(),</span> <span class="nv">$dataName</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="k">array</span> <span class="nv">$browser</span> <span class="o">=</span> <span class="k">array</span><span class="p">())</span></div><div class='line' id='LC592'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC593'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">parent</span><span class="o">::</span><span class="na">__construct</span><span class="p">(</span><span class="nv">$name</span><span class="p">,</span> <span class="nv">$data</span><span class="p">,</span> <span class="nv">$dataName</span><span class="p">);</span></div><div class='line' id='LC594'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">testId</span> <span class="o">=</span> <span class="nb">md5</span><span class="p">(</span><span class="nb">uniqid</span><span class="p">(</span><span class="nx">rand</span><span class="p">(),</span> <span class="k">TRUE</span><span class="p">));</span></div><div class='line' id='LC595'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getDriver</span><span class="p">(</span><span class="nv">$browser</span><span class="p">);</span></div><div class='line' id='LC596'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC597'><br/></div><div class='line' id='LC598'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">setupSpecificBrowser</span><span class="p">(</span><span class="k">array</span> <span class="nv">$browser</span><span class="p">)</span></div><div class='line' id='LC599'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC600'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getDriver</span><span class="p">(</span><span class="nv">$browser</span><span class="p">);</span></div><div class='line' id='LC601'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC602'><br/></div><div class='line' id='LC603'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC604'><span class="sd">     * Stops any shared session still open at the end of the current</span></div><div class='line' id='LC605'><span class="sd">     * PHPUnit process.</span></div><div class='line' id='LC606'><span class="sd">     */</span></div><div class='line' id='LC607'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">__destruct</span><span class="p">()</span></div><div class='line' id='LC608'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC609'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">stopSession</span><span class="p">();</span></div><div class='line' id='LC610'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC611'><br/></div><div class='line' id='LC612'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC613'><span class="sd">     * @param  string $className</span></div><div class='line' id='LC614'><span class="sd">     * @return PHPUnit_Framework_TestSuite</span></div><div class='line' id='LC615'><span class="sd">     */</span></div><div class='line' id='LC616'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">suite</span><span class="p">(</span><span class="nv">$className</span><span class="p">)</span></div><div class='line' id='LC617'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC618'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nx">PHPUnit_Extensions_SeleniumTestSuite</span><span class="o">::</span><span class="na">fromTestCaseClass</span><span class="p">(</span><span class="nv">$className</span><span class="p">);</span></div><div class='line' id='LC619'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC620'><br/></div><div class='line' id='LC621'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC622'><span class="sd">     * Runs the test case and collects the results in a TestResult object.</span></div><div class='line' id='LC623'><span class="sd">     * If no TestResult object is passed a new one will be created.</span></div><div class='line' id='LC624'><span class="sd">     *</span></div><div class='line' id='LC625'><span class="sd">     * @param  PHPUnit_Framework_TestResult $result</span></div><div class='line' id='LC626'><span class="sd">     * @return PHPUnit_Framework_TestResult</span></div><div class='line' id='LC627'><span class="sd">     * @throws InvalidArgumentException</span></div><div class='line' id='LC628'><span class="sd">     */</span></div><div class='line' id='LC629'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">run</span><span class="p">(</span><span class="nx">PHPUnit_Framework_TestResult</span> <span class="nv">$result</span> <span class="o">=</span> <span class="k">NULL</span><span class="p">)</span></div><div class='line' id='LC630'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC631'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$result</span> <span class="o">===</span> <span class="k">NULL</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC632'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">createResult</span><span class="p">();</span></div><div class='line' id='LC633'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC634'><br/></div><div class='line' id='LC635'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">collectCodeCoverageInformation</span> <span class="o">=</span> <span class="nv">$result</span><span class="o">-&gt;</span><span class="na">getCollectCodeCoverageInformation</span><span class="p">();</span></div><div class='line' id='LC636'><br/></div><div class='line' id='LC637'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">drivers</span> <span class="k">as</span> <span class="nv">$driver</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC638'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$driver</span><span class="o">-&gt;</span><span class="na">setCollectCodeCoverageInformation</span><span class="p">(</span></div><div class='line' id='LC639'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">collectCodeCoverageInformation</span></div><div class='line' id='LC640'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC641'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC642'><br/></div><div class='line' id='LC643'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">parent</span><span class="o">::</span><span class="na">run</span><span class="p">(</span><span class="nv">$result</span><span class="p">);</span></div><div class='line' id='LC644'><br/></div><div class='line' id='LC645'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">collectCodeCoverageInformation</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC646'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span><span class="o">-&gt;</span><span class="na">getCodeCoverage</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">append</span><span class="p">(</span></div><div class='line' id='LC647'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getCodeCoverage</span><span class="p">(),</span> <span class="nv">$this</span></div><div class='line' id='LC648'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC649'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC650'><br/></div><div class='line' id='LC651'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$result</span><span class="p">;</span></div><div class='line' id='LC652'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC653'><br/></div><div class='line' id='LC654'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC655'><span class="sd">     * @param  array $browser</span></div><div class='line' id='LC656'><span class="sd">     * @return PHPUnit_Extensions_SeleniumTestCase_Driver</span></div><div class='line' id='LC657'><span class="sd">     */</span></div><div class='line' id='LC658'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">getDriver</span><span class="p">(</span><span class="k">array</span> <span class="nv">$browser</span><span class="p">)</span></div><div class='line' id='LC659'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC660'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC661'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">is_string</span><span class="p">(</span><span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC662'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">InvalidArgumentException</span><span class="p">(</span></div><div class='line' id='LC663'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;Array element &quot;name&quot; is no string.&#39;</span></div><div class='line' id='LC664'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC665'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC666'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC667'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC668'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC669'><br/></div><div class='line' id='LC670'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;browser&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC671'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">is_string</span><span class="p">(</span><span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;browser&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC672'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">InvalidArgumentException</span><span class="p">(</span></div><div class='line' id='LC673'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;Array element &quot;browser&quot; is no string.&#39;</span></div><div class='line' id='LC674'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC675'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC676'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC677'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;browser&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC678'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC679'><br/></div><div class='line' id='LC680'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;host&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC681'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">is_string</span><span class="p">(</span><span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;host&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC682'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">InvalidArgumentException</span><span class="p">(</span></div><div class='line' id='LC683'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;Array element &quot;host&quot; is no string.&#39;</span></div><div class='line' id='LC684'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC685'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC686'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC687'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;host&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;localhost&#39;</span><span class="p">;</span></div><div class='line' id='LC688'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC689'><br/></div><div class='line' id='LC690'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;port&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC691'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">is_int</span><span class="p">(</span><span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;port&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC692'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">InvalidArgumentException</span><span class="p">(</span></div><div class='line' id='LC693'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;Array element &quot;port&quot; is no integer.&#39;</span></div><div class='line' id='LC694'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC695'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC696'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC697'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;port&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="mi">4444</span><span class="p">;</span></div><div class='line' id='LC698'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC699'><br/></div><div class='line' id='LC700'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;timeout&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC701'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">is_int</span><span class="p">(</span><span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;timeout&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC702'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">InvalidArgumentException</span><span class="p">(</span></div><div class='line' id='LC703'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;Array element &quot;timeout&quot; is no integer.&#39;</span></div><div class='line' id='LC704'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC705'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC706'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC707'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;timeout&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="mi">30</span><span class="p">;</span></div><div class='line' id='LC708'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC709'><br/></div><div class='line' id='LC710'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;httpTimeout&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC711'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">is_int</span><span class="p">(</span><span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;httpTimeout&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC712'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">InvalidArgumentException</span><span class="p">(</span></div><div class='line' id='LC713'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;Array element &quot;httpTimeout&quot; is no integer.&#39;</span></div><div class='line' id='LC714'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC715'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC716'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC717'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;httpTimeout&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="mi">45</span><span class="p">;</span></div><div class='line' id='LC718'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC719'><br/></div><div class='line' id='LC720'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$driver</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">PHPUnit_Extensions_SeleniumTestCase_Driver</span><span class="p">;</span></div><div class='line' id='LC721'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$driver</span><span class="o">-&gt;</span><span class="na">setName</span><span class="p">(</span><span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">]);</span></div><div class='line' id='LC722'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$driver</span><span class="o">-&gt;</span><span class="na">setBrowser</span><span class="p">(</span><span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;browser&#39;</span><span class="p">]);</span></div><div class='line' id='LC723'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$driver</span><span class="o">-&gt;</span><span class="na">setHost</span><span class="p">(</span><span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;host&#39;</span><span class="p">]);</span></div><div class='line' id='LC724'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$driver</span><span class="o">-&gt;</span><span class="na">setPort</span><span class="p">(</span><span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;port&#39;</span><span class="p">]);</span></div><div class='line' id='LC725'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$driver</span><span class="o">-&gt;</span><span class="na">setTimeout</span><span class="p">(</span><span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;timeout&#39;</span><span class="p">]);</span></div><div class='line' id='LC726'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$driver</span><span class="o">-&gt;</span><span class="na">setHttpTimeout</span><span class="p">(</span><span class="nv">$browser</span><span class="p">[</span><span class="s1">&#39;httpTimeout&#39;</span><span class="p">]);</span></div><div class='line' id='LC727'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$driver</span><span class="o">-&gt;</span><span class="na">setTestCase</span><span class="p">(</span><span class="nv">$this</span><span class="p">);</span></div><div class='line' id='LC728'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$driver</span><span class="o">-&gt;</span><span class="na">setTestId</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">testId</span><span class="p">);</span></div><div class='line' id='LC729'><br/></div><div class='line' id='LC730'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">drivers</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$driver</span><span class="p">;</span></div><div class='line' id='LC731'><br/></div><div class='line' id='LC732'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$driver</span><span class="p">;</span></div><div class='line' id='LC733'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC734'><br/></div><div class='line' id='LC735'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">skipWithNoServerRunning</span><span class="p">()</span></div><div class='line' id='LC736'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC737'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">try</span> <span class="p">{</span></div><div class='line' id='LC738'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">fsockopen</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">drivers</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">-&gt;</span><span class="na">getHost</span><span class="p">(),</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">drivers</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">-&gt;</span><span class="na">getPort</span><span class="p">(),</span> <span class="nv">$errno</span><span class="p">,</span> <span class="nv">$errstr</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">serverConnectionTimeOut</span><span class="p">);</span></div><div class='line' id='LC739'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">serverRunning</span> <span class="o">=</span> <span class="k">TRUE</span><span class="p">;</span></div><div class='line' id='LC740'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">PHPUnit_Framework_Error_Warning</span> <span class="nv">$e</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC741'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">markTestSkipped</span><span class="p">(</span></div><div class='line' id='LC742'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">sprintf</span><span class="p">(</span></div><div class='line' id='LC743'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;Could not connect to the Selenium Server on %s:%d.&#39;</span><span class="p">,</span></div><div class='line' id='LC744'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">drivers</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">-&gt;</span><span class="na">getHost</span><span class="p">(),</span></div><div class='line' id='LC745'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">drivers</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">-&gt;</span><span class="na">getPort</span><span class="p">()</span></div><div class='line' id='LC746'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">)</span></div><div class='line' id='LC747'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC748'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">serverRunning</span> <span class="o">=</span> <span class="k">FALSE</span><span class="p">;</span></div><div class='line' id='LC749'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC750'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC751'><br/></div><div class='line' id='LC752'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC753'><span class="sd">     * @return string</span></div><div class='line' id='LC754'><span class="sd">     */</span></div><div class='line' id='LC755'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">prepareTestSession</span><span class="p">()</span></div><div class='line' id='LC756'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC757'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$testCaseClassVars</span> <span class="o">=</span> <span class="nb">get_class_vars</span><span class="p">(</span><span class="nb">get_class</span><span class="p">(</span><span class="nv">$this</span><span class="p">));</span></div><div class='line' id='LC758'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$testCaseClassVars</span><span class="p">[</span><span class="s1">&#39;browsers&#39;</span><span class="p">])</span> <span class="p">{</span></div><div class='line' id='LC759'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">start</span><span class="p">();</span></div><div class='line' id='LC760'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC761'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="nv">$shareSession</span> <span class="o">&amp;&amp;</span> <span class="nx">self</span><span class="o">::</span><span class="nv">$sessionId</span> <span class="o">!==</span> <span class="k">NULL</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC762'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setSessionId</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="nv">$sessionId</span><span class="p">);</span></div><div class='line' id='LC763'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">selectWindow</span><span class="p">(</span><span class="s1">&#39;null&#39;</span><span class="p">);</span></div><div class='line' id='LC764'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC765'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">self</span><span class="o">::</span><span class="nv">$sessionId</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">start</span><span class="p">();</span></div><div class='line' id='LC766'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC767'><br/></div><div class='line' id='LC768'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nx">self</span><span class="o">::</span><span class="nv">$sessionId</span><span class="p">;</span></div><div class='line' id='LC769'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC770'><br/></div><div class='line' id='LC771'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC772'><span class="sd">     * @throws RuntimeException</span></div><div class='line' id='LC773'><span class="sd">     */</span></div><div class='line' id='LC774'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">runTest</span><span class="p">()</span></div><div class='line' id='LC775'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC776'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">skipWithNoServerRunning</span><span class="p">();</span></div><div class='line' id='LC777'><br/></div><div class='line' id='LC778'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">prepareTestSession</span><span class="p">();</span></div><div class='line' id='LC779'><br/></div><div class='line' id='LC780'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">is_file</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getName</span><span class="p">(</span><span class="k">FALSE</span><span class="p">)))</span> <span class="p">{</span></div><div class='line' id='LC781'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">=</span> <span class="k">parent</span><span class="o">::</span><span class="na">runTest</span><span class="p">();</span></div><div class='line' id='LC782'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC783'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">runSelenese</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getName</span><span class="p">(</span><span class="k">FALSE</span><span class="p">));</span></div><div class='line' id='LC784'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">=</span> <span class="k">NULL</span><span class="p">;</span></div><div class='line' id='LC785'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC786'><br/></div><div class='line' id='LC787'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">verificationErrors</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC788'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">fail</span><span class="p">(</span><span class="nb">implode</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">verificationErrors</span><span class="p">));</span></div><div class='line' id='LC789'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC790'><br/></div><div class='line' id='LC791'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">self</span><span class="o">::</span><span class="nv">$shareSession</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC792'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">stopSession</span><span class="p">();</span></div><div class='line' id='LC793'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC794'><br/></div><div class='line' id='LC795'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$result</span><span class="p">;</span></div><div class='line' id='LC796'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC797'><br/></div><div class='line' id='LC798'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">stopSession</span><span class="p">()</span></div><div class='line' id='LC799'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC800'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">try</span> <span class="p">{</span></div><div class='line' id='LC801'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">stop</span><span class="p">();</span></div><div class='line' id='LC802'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">RuntimeException</span> <span class="nv">$e</span><span class="p">)</span> <span class="p">{</span> <span class="p">}</span></div><div class='line' id='LC803'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC804'><br/></div><div class='line' id='LC805'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC806'><span class="sd">     * Returns a string representation of the test case.</span></div><div class='line' id='LC807'><span class="sd">     *</span></div><div class='line' id='LC808'><span class="sd">     * @return string</span></div><div class='line' id='LC809'><span class="sd">     */</span></div><div class='line' id='LC810'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">toString</span><span class="p">()</span></div><div class='line' id='LC811'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC812'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$buffer</span> <span class="o">=</span> <span class="k">parent</span><span class="o">::</span><span class="na">toString</span><span class="p">();</span></div><div class='line' id='LC813'><br/></div><div class='line' id='LC814'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">browserName</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC815'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$buffer</span> <span class="o">.=</span> <span class="s1">&#39; with browser &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">browserName</span><span class="p">;</span></div><div class='line' id='LC816'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC817'><br/></div><div class='line' id='LC818'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$buffer</span><span class="p">;</span></div><div class='line' id='LC819'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC820'><br/></div><div class='line' id='LC821'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC822'><span class="sd">     * Runs a test from a Selenese (HTML) specification.</span></div><div class='line' id='LC823'><span class="sd">     *</span></div><div class='line' id='LC824'><span class="sd">     * @param string $filename</span></div><div class='line' id='LC825'><span class="sd">     */</span></div><div class='line' id='LC826'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">runSelenese</span><span class="p">(</span><span class="nv">$filename</span><span class="p">)</span></div><div class='line' id='LC827'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC828'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$document</span> <span class="o">=</span> <span class="nx">PHPUnit_Util_XML</span><span class="o">::</span><span class="na">loadFile</span><span class="p">(</span><span class="nv">$filename</span><span class="p">,</span> <span class="k">TRUE</span><span class="p">);</span></div><div class='line' id='LC829'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$xpath</span>    <span class="o">=</span> <span class="k">new</span> <span class="nx">DOMXPath</span><span class="p">(</span><span class="nv">$document</span><span class="p">);</span></div><div class='line' id='LC830'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$rows</span>     <span class="o">=</span> <span class="nv">$xpath</span><span class="o">-&gt;</span><span class="na">query</span><span class="p">(</span><span class="s1">&#39;body/table/tbody/tr&#39;</span><span class="p">);</span></div><div class='line' id='LC831'><br/></div><div class='line' id='LC832'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$rows</span> <span class="k">as</span> <span class="nv">$row</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC833'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$action</span>    <span class="o">=</span> <span class="k">NULL</span><span class="p">;</span></div><div class='line' id='LC834'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$arguments</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC835'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$columns</span>   <span class="o">=</span> <span class="nv">$xpath</span><span class="o">-&gt;</span><span class="na">query</span><span class="p">(</span><span class="s1">&#39;td&#39;</span><span class="p">,</span> <span class="nv">$row</span><span class="p">);</span></div><div class='line' id='LC836'><br/></div><div class='line' id='LC837'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$columns</span> <span class="k">as</span> <span class="nv">$column</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC838'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$action</span> <span class="o">===</span> <span class="k">NULL</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC839'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$action</span> <span class="o">=</span> <span class="nx">PHPUnit_Util_XML</span><span class="o">::</span><span class="na">nodeToText</span><span class="p">(</span><span class="nv">$column</span><span class="p">);</span></div><div class='line' id='LC840'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC841'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$arguments</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">PHPUnit_Util_XML</span><span class="o">::</span><span class="na">nodeToText</span><span class="p">(</span><span class="nv">$column</span><span class="p">);</span></div><div class='line' id='LC842'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC843'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC844'><br/></div><div class='line' id='LC845'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">method_exists</span><span class="p">(</span><span class="nv">$this</span><span class="p">,</span> <span class="nv">$action</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC846'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">call_user_func_array</span><span class="p">(</span><span class="k">array</span><span class="p">(</span><span class="nv">$this</span><span class="p">,</span> <span class="nv">$action</span><span class="p">),</span> <span class="nv">$arguments</span><span class="p">);</span></div><div class='line' id='LC847'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC848'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">__call</span><span class="p">(</span><span class="nv">$action</span><span class="p">,</span> <span class="nv">$arguments</span><span class="p">);</span></div><div class='line' id='LC849'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC850'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC851'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC852'><br/></div><div class='line' id='LC853'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC854'><span class="sd">     * Delegate method calls to the driver.</span></div><div class='line' id='LC855'><span class="sd">     *</span></div><div class='line' id='LC856'><span class="sd">     * @param  string $command</span></div><div class='line' id='LC857'><span class="sd">     * @param  array  $arguments</span></div><div class='line' id='LC858'><span class="sd">     * @return mixed</span></div><div class='line' id='LC859'><span class="sd">     */</span></div><div class='line' id='LC860'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">__call</span><span class="p">(</span><span class="nv">$command</span><span class="p">,</span> <span class="nv">$arguments</span><span class="p">)</span></div><div class='line' id='LC861'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC862'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">=</span> <span class="nb">call_user_func_array</span><span class="p">(</span></div><div class='line' id='LC863'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">drivers</span><span class="p">[</span><span class="mi">0</span><span class="p">],</span> <span class="nv">$command</span><span class="p">),</span> <span class="nv">$arguments</span></div><div class='line' id='LC864'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC865'><br/></div><div class='line' id='LC866'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">verificationErrors</span> <span class="o">=</span> <span class="nb">array_merge</span><span class="p">(</span></div><div class='line' id='LC867'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">verificationErrors</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">drivers</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">-&gt;</span><span class="na">getVerificationErrors</span><span class="p">()</span></div><div class='line' id='LC868'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC869'><br/></div><div class='line' id='LC870'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">drivers</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">-&gt;</span><span class="na">clearVerificationErrors</span><span class="p">();</span></div><div class='line' id='LC871'><br/></div><div class='line' id='LC872'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$result</span><span class="p">;</span></div><div class='line' id='LC873'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC874'><br/></div><div class='line' id='LC875'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC876'><span class="sd">     * Asserts that an element&#39;s value is equal to a given string.</span></div><div class='line' id='LC877'><span class="sd">     *</span></div><div class='line' id='LC878'><span class="sd">     * @param  string $locator</span></div><div class='line' id='LC879'><span class="sd">     * @param  string $text</span></div><div class='line' id='LC880'><span class="sd">     * @param  string $message</span></div><div class='line' id='LC881'><span class="sd">     */</span></div><div class='line' id='LC882'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">assertElementValueEquals</span><span class="p">(</span><span class="nv">$locator</span><span class="p">,</span> <span class="nv">$text</span><span class="p">,</span> <span class="nv">$message</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span></div><div class='line' id='LC883'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC884'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertEquals</span><span class="p">(</span><span class="nv">$text</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getValue</span><span class="p">(</span><span class="nv">$locator</span><span class="p">),</span> <span class="nv">$message</span><span class="p">);</span></div><div class='line' id='LC885'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC886'><br/></div><div class='line' id='LC887'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC888'><span class="sd">     * Asserts that an element&#39;s value is not equal to a given string.</span></div><div class='line' id='LC889'><span class="sd">     *</span></div><div class='line' id='LC890'><span class="sd">     * @param  string $locator</span></div><div class='line' id='LC891'><span class="sd">     * @param  string $text</span></div><div class='line' id='LC892'><span class="sd">     * @param  string $message</span></div><div class='line' id='LC893'><span class="sd">     */</span></div><div class='line' id='LC894'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">assertElementValueNotEquals</span><span class="p">(</span><span class="nv">$locator</span><span class="p">,</span> <span class="nv">$text</span><span class="p">,</span> <span class="nv">$message</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span></div><div class='line' id='LC895'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC896'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertNotEquals</span><span class="p">(</span><span class="nv">$text</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getValue</span><span class="p">(</span><span class="nv">$locator</span><span class="p">),</span> <span class="nv">$message</span><span class="p">);</span></div><div class='line' id='LC897'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC898'><br/></div><div class='line' id='LC899'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC900'><span class="sd">     * Asserts that an element&#39;s value contains a given string.</span></div><div class='line' id='LC901'><span class="sd">     *</span></div><div class='line' id='LC902'><span class="sd">     * @param  string $locator</span></div><div class='line' id='LC903'><span class="sd">     * @param  string $text</span></div><div class='line' id='LC904'><span class="sd">     * @param  string $message</span></div><div class='line' id='LC905'><span class="sd">     */</span></div><div class='line' id='LC906'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">assertElementValueContains</span><span class="p">(</span><span class="nv">$locator</span><span class="p">,</span> <span class="nv">$text</span><span class="p">,</span> <span class="nv">$message</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span></div><div class='line' id='LC907'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC908'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertContains</span><span class="p">(</span><span class="nv">$text</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getValue</span><span class="p">(</span><span class="nv">$locator</span><span class="p">),</span> <span class="nv">$message</span><span class="p">);</span></div><div class='line' id='LC909'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC910'><br/></div><div class='line' id='LC911'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC912'><span class="sd">     * Asserts that an element&#39;s value does not contain a given string.</span></div><div class='line' id='LC913'><span class="sd">     *</span></div><div class='line' id='LC914'><span class="sd">     * @param  string $locator</span></div><div class='line' id='LC915'><span class="sd">     * @param  string $text</span></div><div class='line' id='LC916'><span class="sd">     * @param  string $message</span></div><div class='line' id='LC917'><span class="sd">     */</span></div><div class='line' id='LC918'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">assertElementValueNotContains</span><span class="p">(</span><span class="nv">$locator</span><span class="p">,</span> <span class="nv">$text</span><span class="p">,</span> <span class="nv">$message</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span></div><div class='line' id='LC919'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC920'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertNotContains</span><span class="p">(</span><span class="nv">$text</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getValue</span><span class="p">(</span><span class="nv">$locator</span><span class="p">),</span> <span class="nv">$message</span><span class="p">);</span></div><div class='line' id='LC921'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC922'><br/></div><div class='line' id='LC923'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC924'><span class="sd">     * Asserts that an element contains a given string.</span></div><div class='line' id='LC925'><span class="sd">     *</span></div><div class='line' id='LC926'><span class="sd">     * @param  string $locator</span></div><div class='line' id='LC927'><span class="sd">     * @param  string $text</span></div><div class='line' id='LC928'><span class="sd">     * @param  string $message</span></div><div class='line' id='LC929'><span class="sd">     */</span></div><div class='line' id='LC930'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">assertElementContainsText</span><span class="p">(</span><span class="nv">$locator</span><span class="p">,</span> <span class="nv">$text</span><span class="p">,</span> <span class="nv">$message</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span></div><div class='line' id='LC931'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC932'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertContains</span><span class="p">(</span><span class="nv">$text</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getText</span><span class="p">(</span><span class="nv">$locator</span><span class="p">),</span> <span class="nv">$message</span><span class="p">);</span></div><div class='line' id='LC933'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC934'><br/></div><div class='line' id='LC935'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC936'><span class="sd">     * Asserts that an element does not contain a given string.</span></div><div class='line' id='LC937'><span class="sd">     *</span></div><div class='line' id='LC938'><span class="sd">     * @param  string $locator</span></div><div class='line' id='LC939'><span class="sd">     * @param  string $text</span></div><div class='line' id='LC940'><span class="sd">     * @param  string $message</span></div><div class='line' id='LC941'><span class="sd">     */</span></div><div class='line' id='LC942'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">assertElementNotContainsText</span><span class="p">(</span><span class="nv">$locator</span><span class="p">,</span> <span class="nv">$text</span><span class="p">,</span> <span class="nv">$message</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span></div><div class='line' id='LC943'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC944'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertNotContains</span><span class="p">(</span><span class="nv">$text</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getText</span><span class="p">(</span><span class="nv">$locator</span><span class="p">),</span> <span class="nv">$message</span><span class="p">);</span></div><div class='line' id='LC945'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC946'><br/></div><div class='line' id='LC947'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC948'><span class="sd">     * Asserts that a select element has a specific option.</span></div><div class='line' id='LC949'><span class="sd">     *</span></div><div class='line' id='LC950'><span class="sd">     * @param  string $selectLocator</span></div><div class='line' id='LC951'><span class="sd">     * @param  string $option</span></div><div class='line' id='LC952'><span class="sd">     * @param  string $message</span></div><div class='line' id='LC953'><span class="sd">     */</span></div><div class='line' id='LC954'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">assertSelectHasOption</span><span class="p">(</span><span class="nv">$selectLocator</span><span class="p">,</span> <span class="nv">$option</span><span class="p">,</span> <span class="nv">$message</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span></div><div class='line' id='LC955'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC956'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertContains</span><span class="p">(</span><span class="nv">$option</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getSelectOptions</span><span class="p">(</span><span class="nv">$selectLocator</span><span class="p">),</span> <span class="nv">$message</span><span class="p">);</span></div><div class='line' id='LC957'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC958'><br/></div><div class='line' id='LC959'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC960'><span class="sd">     * Asserts that a select element does not have a specific option.</span></div><div class='line' id='LC961'><span class="sd">     *</span></div><div class='line' id='LC962'><span class="sd">     * @param  string $selectLocator</span></div><div class='line' id='LC963'><span class="sd">     * @param  string $option</span></div><div class='line' id='LC964'><span class="sd">     * @param  string $message</span></div><div class='line' id='LC965'><span class="sd">     */</span></div><div class='line' id='LC966'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">assertSelectNotHasOption</span><span class="p">(</span><span class="nv">$selectLocator</span><span class="p">,</span> <span class="nv">$option</span><span class="p">,</span> <span class="nv">$message</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span></div><div class='line' id='LC967'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC968'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertNotContains</span><span class="p">(</span><span class="nv">$option</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getSelectOptions</span><span class="p">(</span><span class="nv">$selectLocator</span><span class="p">),</span> <span class="nv">$message</span><span class="p">);</span></div><div class='line' id='LC969'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC970'><br/></div><div class='line' id='LC971'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC972'><span class="sd">     * Asserts that a specific label is selected.</span></div><div class='line' id='LC973'><span class="sd">     *</span></div><div class='line' id='LC974'><span class="sd">     * @param  string $selectLocator</span></div><div class='line' id='LC975'><span class="sd">     * @param  string $value</span></div><div class='line' id='LC976'><span class="sd">     * @param  string $message</span></div><div class='line' id='LC977'><span class="sd">     */</span></div><div class='line' id='LC978'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">assertSelected</span><span class="p">(</span><span class="nv">$selectLocator</span><span class="p">,</span> <span class="nv">$option</span><span class="p">,</span> <span class="nv">$message</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span></div><div class='line' id='LC979'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC980'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$message</span> <span class="o">==</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC981'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span></div><div class='line' id='LC982'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;Label &quot;%s&quot; not selected in &quot;%s&quot;.&#39;</span><span class="p">,</span></div><div class='line' id='LC983'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$option</span><span class="p">,</span></div><div class='line' id='LC984'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$selectLocator</span></div><div class='line' id='LC985'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC986'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC987'><br/></div><div class='line' id='LC988'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertEquals</span><span class="p">(</span></div><div class='line' id='LC989'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$option</span><span class="p">,</span></div><div class='line' id='LC990'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getSelectedLabel</span><span class="p">(</span><span class="nv">$selectLocator</span><span class="p">),</span></div><div class='line' id='LC991'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message</span></div><div class='line' id='LC992'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC993'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC994'><br/></div><div class='line' id='LC995'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC996'><span class="sd">     * Asserts that a specific label is not selected.</span></div><div class='line' id='LC997'><span class="sd">     *</span></div><div class='line' id='LC998'><span class="sd">     * @param  string $selectLocator</span></div><div class='line' id='LC999'><span class="sd">     * @param  string $value</span></div><div class='line' id='LC1000'><span class="sd">     * @param  string $message</span></div><div class='line' id='LC1001'><span class="sd">     */</span></div><div class='line' id='LC1002'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">assertNotSelected</span><span class="p">(</span><span class="nv">$selectLocator</span><span class="p">,</span> <span class="nv">$option</span><span class="p">,</span> <span class="nv">$message</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span></div><div class='line' id='LC1003'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC1004'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$message</span> <span class="o">==</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1005'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span></div><div class='line' id='LC1006'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;Label &quot;%s&quot; selected in &quot;%s&quot;.&#39;</span><span class="p">,</span></div><div class='line' id='LC1007'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$option</span><span class="p">,</span></div><div class='line' id='LC1008'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$selectLocator</span></div><div class='line' id='LC1009'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC1010'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1011'><br/></div><div class='line' id='LC1012'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertNotEquals</span><span class="p">(</span></div><div class='line' id='LC1013'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$option</span><span class="p">,</span></div><div class='line' id='LC1014'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getSelectedLabel</span><span class="p">(</span><span class="nv">$selectLocator</span><span class="p">),</span></div><div class='line' id='LC1015'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message</span></div><div class='line' id='LC1016'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC1017'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1018'><br/></div><div class='line' id='LC1019'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1020'><span class="sd">     * Asserts that a specific value is selected.</span></div><div class='line' id='LC1021'><span class="sd">     *</span></div><div class='line' id='LC1022'><span class="sd">     * @param  string $selectLocator</span></div><div class='line' id='LC1023'><span class="sd">     * @param  string $value</span></div><div class='line' id='LC1024'><span class="sd">     * @param  string $message</span></div><div class='line' id='LC1025'><span class="sd">     */</span></div><div class='line' id='LC1026'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">assertIsSelected</span><span class="p">(</span><span class="nv">$selectLocator</span><span class="p">,</span> <span class="nv">$value</span><span class="p">,</span> <span class="nv">$message</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span></div><div class='line' id='LC1027'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC1028'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$message</span> <span class="o">==</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1029'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span></div><div class='line' id='LC1030'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;Value &quot;%s&quot; not selected in &quot;%s&quot;.&#39;</span><span class="p">,</span></div><div class='line' id='LC1031'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$value</span><span class="p">,</span></div><div class='line' id='LC1032'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$selectLocator</span></div><div class='line' id='LC1033'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC1034'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1035'><br/></div><div class='line' id='LC1036'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertEquals</span><span class="p">(</span></div><div class='line' id='LC1037'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$value</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getSelectedValue</span><span class="p">(</span><span class="nv">$selectLocator</span><span class="p">),</span></div><div class='line' id='LC1038'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message</span></div><div class='line' id='LC1039'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC1040'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1041'><br/></div><div class='line' id='LC1042'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1043'><span class="sd">     * Asserts that a specific value is not selected.</span></div><div class='line' id='LC1044'><span class="sd">     *</span></div><div class='line' id='LC1045'><span class="sd">     * @param  string $selectLocator</span></div><div class='line' id='LC1046'><span class="sd">     * @param  string $value</span></div><div class='line' id='LC1047'><span class="sd">     * @param  string $message</span></div><div class='line' id='LC1048'><span class="sd">     */</span></div><div class='line' id='LC1049'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">assertIsNotSelected</span><span class="p">(</span><span class="nv">$selectLocator</span><span class="p">,</span> <span class="nv">$value</span><span class="p">,</span> <span class="nv">$message</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span></div><div class='line' id='LC1050'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC1051'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$message</span> <span class="o">==</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1052'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message</span> <span class="o">=</span> <span class="nb">sprintf</span><span class="p">(</span></div><div class='line' id='LC1053'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;Value &quot;%s&quot; selected in &quot;%s&quot;.&#39;</span><span class="p">,</span></div><div class='line' id='LC1054'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$value</span><span class="p">,</span></div><div class='line' id='LC1055'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$selectLocator</span></div><div class='line' id='LC1056'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC1057'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1058'><br/></div><div class='line' id='LC1059'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">assertNotEquals</span><span class="p">(</span></div><div class='line' id='LC1060'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$value</span><span class="p">,</span></div><div class='line' id='LC1061'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getSelectedValue</span><span class="p">(</span><span class="nv">$selectLocator</span><span class="p">),</span></div><div class='line' id='LC1062'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message</span></div><div class='line' id='LC1063'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC1064'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1065'><br/></div><div class='line' id='LC1066'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1067'><span class="sd">     * Template Method that is called after Selenium actions.</span></div><div class='line' id='LC1068'><span class="sd">     *</span></div><div class='line' id='LC1069'><span class="sd">     * @param  string $action</span></div><div class='line' id='LC1070'><span class="sd">     */</span></div><div class='line' id='LC1071'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">defaultAssertions</span><span class="p">(</span><span class="nv">$action</span><span class="p">)</span></div><div class='line' id='LC1072'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC1073'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1074'><br/></div><div class='line' id='LC1075'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1076'><span class="sd">     * @return array</span></div><div class='line' id='LC1077'><span class="sd">     */</span></div><div class='line' id='LC1078'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">getCodeCoverage</span><span class="p">()</span></div><div class='line' id='LC1079'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC1080'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$coverage</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">PHPUnit_Extensions_SeleniumCommon_RemoteCoverage</span><span class="p">(</span></div><div class='line' id='LC1081'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">coverageScriptUrl</span><span class="p">,</span></div><div class='line' id='LC1082'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">testId</span></div><div class='line' id='LC1083'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC1084'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$coverage</span><span class="o">-&gt;</span><span class="na">get</span><span class="p">();</span></div><div class='line' id='LC1085'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1086'><br/></div><div class='line' id='LC1087'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1088'><span class="sd">     * @param  string $action</span></div><div class='line' id='LC1089'><span class="sd">     */</span></div><div class='line' id='LC1090'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">runDefaultAssertions</span><span class="p">(</span><span class="nv">$action</span><span class="p">)</span></div><div class='line' id='LC1091'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC1092'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">inDefaultAssertions</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1093'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">inDefaultAssertions</span> <span class="o">=</span> <span class="k">TRUE</span><span class="p">;</span></div><div class='line' id='LC1094'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">defaultAssertions</span><span class="p">(</span><span class="nv">$action</span><span class="p">);</span></div><div class='line' id='LC1095'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">inDefaultAssertions</span> <span class="o">=</span> <span class="k">FALSE</span><span class="p">;</span></div><div class='line' id='LC1096'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1097'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1098'><br/></div><div class='line' id='LC1099'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1100'><span class="sd">     * This method is called when a test method did not execute successfully.</span></div><div class='line' id='LC1101'><span class="sd">     *</span></div><div class='line' id='LC1102'><span class="sd">     * @param Exception $e</span></div><div class='line' id='LC1103'><span class="sd">     */</span></div><div class='line' id='LC1104'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">onNotSuccessfulTest</span><span class="p">(</span><span class="nx">Exception</span> <span class="nv">$e</span><span class="p">)</span></div><div class='line' id='LC1105'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC1106'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">serverRunning</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1107'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="nv">$e</span><span class="p">;</span></div><div class='line' id='LC1108'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1109'><br/></div><div class='line' id='LC1110'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">try</span> <span class="p">{</span></div><div class='line' id='LC1111'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">restoreSessionStateAfterFailedTest</span><span class="p">();</span></div><div class='line' id='LC1112'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$buffer</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC1113'><br/></div><div class='line' id='LC1114'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">captureScreenshotOnFailure</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1115'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$buffer</span> <span class="o">.=</span> <span class="s1">&#39;Current URL: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">drivers</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">-&gt;</span><span class="na">getLocation</span><span class="p">()</span> <span class="o">.</span></div><div class='line' id='LC1116'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC1117'><br/></div><div class='line' id='LC1118'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$screenshotInfo</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">takeScreenshot</span><span class="p">();</span></div><div class='line' id='LC1119'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$screenshotInfo</span> <span class="o">!=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1120'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$buffer</span> <span class="o">.=</span> <span class="nv">$screenshotInfo</span><span class="p">;</span></div><div class='line' id='LC1121'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1122'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1123'><br/></div><div class='line' id='LC1124'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">stopSession</span><span class="p">();</span></div><div class='line' id='LC1125'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">Exception</span> <span class="nv">$another</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1126'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$buffer</span> <span class="o">=</span> <span class="s2">&quot;Issues while capturing the screenshot:</span><span class="se">\n</span><span class="s2">&quot;</span> <span class="o">.</span> <span class="nv">$another</span><span class="o">-&gt;</span><span class="na">getMessage</span><span class="p">();</span></div><div class='line' id='LC1127'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1128'><br/></div><div class='line' id='LC1129'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$e</span> <span class="nx">instanceof</span> <span class="nx">PHPUnit_Framework_ExpectationFailedException</span></div><div class='line' id='LC1130'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">&amp;&amp;</span> <span class="nb">is_object</span><span class="p">(</span><span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getComparisonFailure</span><span class="p">()))</span> <span class="p">{</span></div><div class='line' id='LC1131'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message</span> <span class="o">=</span> <span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getComparisonFailure</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">toString</span><span class="p">();</span></div><div class='line' id='LC1132'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1133'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message</span> <span class="o">=</span> <span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getMessage</span><span class="p">();</span></div><div class='line' id='LC1134'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1135'><br/></div><div class='line' id='LC1136'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$buffer</span> <span class="o">.=</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span> <span class="o">.</span> <span class="nv">$message</span><span class="p">;</span></div><div class='line' id='LC1137'><br/></div><div class='line' id='LC1138'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// gain the screenshot path, lose the stack trace</span></div><div class='line' id='LC1139'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">captureScreenshotOnFailure</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1140'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">PHPUnit_Framework_Error</span><span class="p">(</span><span class="nv">$buffer</span><span class="p">,</span> <span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getCode</span><span class="p">(),</span> <span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getFile</span><span class="p">(),</span> <span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getLine</span><span class="p">(),</span> <span class="nv">$e</span><span class="p">);</span></div><div class='line' id='LC1141'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1142'><br/></div><div class='line' id='LC1143'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// yes to stack trace and everything</span></div><div class='line' id='LC1144'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$e</span> <span class="nx">instanceof</span> <span class="nx">PHPUnit_Framework_IncompleteTestError</span></div><div class='line' id='LC1145'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">||</span> <span class="nv">$e</span> <span class="nx">instanceof</span> <span class="nx">PHPUnit_Framework_SkippedTestError</span></div><div class='line' id='LC1146'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">||</span> <span class="nv">$e</span> <span class="nx">instanceof</span> <span class="nx">PHPUnit_Framework_AssertionFailedError</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC1147'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="nv">$e</span><span class="p">;</span></div><div class='line' id='LC1148'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1149'><br/></div><div class='line' id='LC1150'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// yes to stack trace, only for F tests</span></div><div class='line' id='LC1151'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// PHPUnit issue 471 prevents getTrace() from being useful</span></div><div class='line' id='LC1152'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">PHPUnit_Framework_Error</span><span class="p">(</span><span class="nv">$buffer</span><span class="p">,</span> <span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getCode</span><span class="p">(),</span> <span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getFile</span><span class="p">(),</span> <span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getLine</span><span class="p">(),</span> <span class="nv">$e</span><span class="p">);</span></div><div class='line' id='LC1153'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1154'><br/></div><div class='line' id='LC1155'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">restoreSessionStateAfterFailedTest</span><span class="p">()</span></div><div class='line' id='LC1156'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC1157'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">self</span><span class="o">::</span><span class="nv">$sessionId</span> <span class="o">=</span> <span class="k">NULL</span><span class="p">;</span></div><div class='line' id='LC1158'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1159'><br/></div><div class='line' id='LC1160'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1161'><span class="sd">     * Returns correct path to screenshot save path.</span></div><div class='line' id='LC1162'><span class="sd">     *</span></div><div class='line' id='LC1163'><span class="sd">     * @return string</span></div><div class='line' id='LC1164'><span class="sd">     */</span></div><div class='line' id='LC1165'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">getScreenshotPath</span><span class="p">()</span></div><div class='line' id='LC1166'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC1167'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$path</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">screenshotPath</span><span class="p">;</span></div><div class='line' id='LC1168'><br/></div><div class='line' id='LC1169'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">in_array</span><span class="p">(</span><span class="nx">substr</span><span class="p">(</span><span class="nv">$path</span><span class="p">,</span> <span class="nb">strlen</span><span class="p">(</span><span class="nv">$path</span><span class="p">)</span> <span class="o">-</span><span class="mi">1</span><span class="p">,</span> <span class="mi">1</span><span class="p">),</span> <span class="k">array</span><span class="p">(</span><span class="s2">&quot;/&quot;</span><span class="p">,</span><span class="s2">&quot;</span><span class="se">\\</span><span class="s2">&quot;</span><span class="p">)))</span> <span class="p">{</span></div><div class='line' id='LC1170'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$path</span> <span class="o">.=</span> <span class="nx">DIRECTORY_SEPARATOR</span><span class="p">;</span></div><div class='line' id='LC1171'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1172'><br/></div><div class='line' id='LC1173'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$path</span><span class="p">;</span></div><div class='line' id='LC1174'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1175'><br/></div><div class='line' id='LC1176'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1177'><span class="sd">     * Take a screenshot and return information about it.</span></div><div class='line' id='LC1178'><span class="sd">     * Return an empty string if the screenshotPath and screenshotUrl</span></div><div class='line' id='LC1179'><span class="sd">     * properties are empty.</span></div><div class='line' id='LC1180'><span class="sd">     * Issue #88.</span></div><div class='line' id='LC1181'><span class="sd">     *</span></div><div class='line' id='LC1182'><span class="sd">     * @access protected</span></div><div class='line' id='LC1183'><span class="sd">     * @return string</span></div><div class='line' id='LC1184'><span class="sd">     */</span></div><div class='line' id='LC1185'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">takeScreenshot</span><span class="p">()</span></div><div class='line' id='LC1186'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC1187'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">screenshotPath</span><span class="p">)</span> <span class="o">&amp;&amp;</span></div><div class='line' id='LC1188'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">screenshotUrl</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC1189'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$filename</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getScreenshotPath</span><span class="p">()</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">testId</span> <span class="o">.</span> <span class="s1">&#39;.png&#39;</span><span class="p">;</span></div><div class='line' id='LC1190'><br/></div><div class='line' id='LC1191'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">drivers</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">-&gt;</span><span class="na">captureEntirePageScreenshot</span><span class="p">(</span><span class="nv">$filename</span><span class="p">);</span></div><div class='line' id='LC1192'><br/></div><div class='line' id='LC1193'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="s1">&#39;Screenshot: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">screenshotUrl</span> <span class="o">.</span> <span class="s1">&#39;/&#39;</span> <span class="o">.</span></div><div class='line' id='LC1194'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">testId</span> <span class="o">.</span> <span class="s2">&quot;.png</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC1195'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC1196'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC1197'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1198'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC1199'><br/></div><div class='line' id='LC1200'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC1201'><span class="sd">     * Pause support for runSelenese() HTML cases</span></div><div class='line' id='LC1202'><span class="sd">     * @param $milliseconds</span></div><div class='line' id='LC1203'><span class="sd">     */</span></div><div class='line' id='LC1204'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">pause</span><span class="p">(</span><span class="nv">$milliseconds</span><span class="p">)</span></div><div class='line' id='LC1205'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC1206'>		    <span class="nb">sleep</span><span class="p">(</span><span class="nx">round</span><span class="p">(</span><span class="nv">$milliseconds</span><span class="o">/</span><span class="mi">1000</span><span class="p">));</span></div><div class='line' id='LC1207'>	  <span class="p">}</span></div><div class='line' id='LC1208'><span class="p">}</span></div></pre></div></td>
          </tr>
        </table>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2014 <span title="0.05278s from github-fe137-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="fullscreen-contents js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-remove-close close js-ajax-error-dismiss"></a>
      Something went wrong with that request. Please try again.
    </div>

  </body>
</html>

