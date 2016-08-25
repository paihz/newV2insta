<nav class="top-menu hidden-md-up">
    <div class="menu-icon-container ">
        <div class="animate-menu-button left-menu-toggle">
            <div><!-- --></div>
        </div>
        <p></p>
    </div>
    <div class="menu">
        <div class="menu-user-block">
            <div class="right example-buy-btn">
                <a href="javascript:void(0)" target="_blank" class="btn btn-danger-outline btn-rounded">
                    Balance&nbsp;USD&nbsp;{{ Auth::user()->balance }}
                </a>
            </div>
        </div>
    </div>
</nav>