@extends('layouts/app')

@section('content')
<div class="blank-header subMenuBox">
        <img class="caja cl  subMenuSvg" src="img/icons-pattern-left.svg">
        <img class="caja crz subMenuSvg" src="img/icons-pattern-right.svg">
        <div class="header-content">
            <h1>
                Soporte
            </h1>
        </div>
    </div>


    <div class="container mt-5" style="max-width: 900px">
        <h2 id="account-support">Soporte de Cuenta</h2>
        <p>If you haven't received your confirmation email, you can request to resend your confirmation instructions via
            our <a href="https://gitlab.com/users/confirmation/new">confirmation page</a>.</p>
        <h2 id="contributing">Contributing</h2>
        <ul>
                <li><a href="https://gitlab.com/gitlab-org/gitlab-ce/blob/master/CONTRIBUTING.md">Contributing guide</a>: describes how to submit merge requests and issues. Merge requests and issues not in line with the guidelines in this document will be closed.</li>
                </ul>
        <h2 id=feature-proposals>Feature Proposals</h2>
        <p>Feature proposals should be submitted to the <a href="https://gitlab.com/gitlab-org/gitlab/issues">issue
                tracker</a>.</p>
        <p>Please read the <a
                href="https://gitlab.com/gitlab-org/gitlab-ce/blob/master/doc/development/contributing/issue_workflow.md#feature-proposals">contributing
                guidelines for feature proposals</a> before posting on the Issue tracker and make use of the "Feature
            Proposal" issue template.</p>
        <h2 id=references>References</h2>
        <ul>
            <li><a href="https://docs.gitlab.com">GitLab Documentation</a>: documents all GitLab applications.</li>
            <li><a href="https://forum.gitlab.com/">GitLab Forum</a>: get help directly from the community.</li>
            <li><a href="https://docs.gitlab.com/ee/university/">GitLab University</a>: contains a variety of resources
                for learning Git and GitLab.</li>
            <li><a href="https://www.packtpub.com/application-development/gitlab-cookbook">The GitLab Cookbook</a>:
                written by core team member Jeroen van Baarsen, it is the most comprehensive book about GitLab.</li>
            <li><a href="https://gitlab.com/gitlab-org/gitlab-recipes">GitLab Recipes</a>: A range of useful unofficial
                guides to using non-packaged software in conjunction with GitLab.</li>
            <li><a href="http://www.learnenough.com/git-tutorial">Learn Enough Git to Be Dangerous by Michael Hartl</a>:
                is a great introduction to version control and git.</li>
            <li>Version two of the <a href="http://git-scm.com/book/en/v2">Pro Git book</a> has a <a
                    href="http://git-scm.com/book/en/v2/Git-on-the-Server-GitLab">section about GitLab.</a></li>
            <li>O'Reilly Media 'Git for teams' <a href="http://shop.oreilly.com/product/0636920034520.do">book</a> has a
                chapter on GitLab. There are also <a
                    href="http://shop.oreilly.com/product/0636920034872.do?code=WKGTVD">videos</a> about Git and GitLab.
                They also provide a <a href="http://player.oreilly.com/videos/9781491912003?toc_id=194077">free video
                    about creating a GitLab account</a>.</li>
            <li><a href="https://www.youtube.com/channel/UCnMGQ8QHMAnVIsI3xJrihhg">GitLab YouTube Channel</a>: the place
                where you can see videos of features and installation options.</li>
        </ul>
        <h2 id=renewals>Renewals</h2>
        <p>Renewals can be processed through subscription portal. <a
                href="#">License troubleshooting</a></p>
        <h3 id=instructions>Instructions</h3>
        <ol>
            <li>Renew existing subscription for the billing account - <a
                    href="#">link</a>
            </li>
            <li>Renew existing subscription with a "true up" - <a
                    href="#">link</a>
            </li>
        </ol>
        <p>For assistance with your renewal please fill out the <a href="/renewals">contact form on the renewals
                page</a>.</p>
        <h2 id=reproducible-bugs>Reproducible Bugs</h2>
        <p>Bug reports should be submitted to the <a href="https://gitlab.com/gitlab-org/gitlab/issues">issue
                tracker</a>.</p>
        <p>Please read the <a
                href="https://gitlab.com/gitlab-org/gitlab-ce/blob/master/CONTRIBUTING.md#issue-tracker-guidelines">contributing
                guidelines for reporting bugs</a> before posting on the Issue tracker and make use of the "Bug" issue
            template.</p>
        <p>Other resources for discussion:</p>
        <ul>
            <li><a href="https://webchat.freenode.net/?channels=gitlab">#gitlab IRC channel</a>: a Freenode channel to
                get in touch with other GitLab users and get help. It is managed by James Newton (newton) and Drew
                Blessing (dblessing).</li>
            <li><a href="https://forum.gitlab.com/">GitLab Community Forum</a>: this is the best place to have a
                discussion.</li>
            <li><a href="https://groups.google.com/forum/#!forum/gitlabhq">Mailing list</a>: Please search for similar
                issues before posting your own, there's a good chance somebody else had the same issue you have now and
                has resolved it.</li>
            <li><a href="https://gitter.im/gitlabhq/gitlabhq#">Gitter chat room</a>: here you can ask questions when you
                need help.</li>
        </ul>
        <h2 id=security>Security</h2>
        <ul>
            <li><a href="#">The responsible disclosure page</a> describes how to contact GitLab to
                report security vulnerabilities and other security information.</li>
            <li><a href="http://doc.gitlab.com/ce/security/README.html">The security section in the documentation</a>
                lists what you can do to further secure your GitLab instance.</li>
        </ul>
        <h2 id=technical-support>Technical Support</h2>
        <p>For details on where to get paid Technical Support, and with what level of service, please see the <a
                href="#">Support page</a>.</p>
        <h2 id=updating>Updating</h2>
        <ul>
            <li><a href="#">GitLab update page</a>: resources and information to help you update your GitLab
                instance.</li>
            <li><a href="https://gitlab.com/gitlab-org/gitlab-ce/blob/master/MAINTENANCE.md">Maintenance policy</a>:
                specifies what versions are supported.</li>
        </ul>
    </div>

@endsection