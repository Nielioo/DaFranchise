{{-- begin of navbar --}}
<nav class="navbar navbar-expand-lg py-2 navbar-light bg-light shadow-sm sticky-top">
    <div class="container">

        {{-- logo --}}
        <a class="navbar-brand" href="#">
            <img src="/img/logo.png" alt="" width="30" height="30">
        </a>

        {{-- company name --}}
        <a class="navbar-brand" href="#">DaFranchise</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- item name --}}
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{($title==="HomePage")?'active':''}}" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{($title==="FranchisePage")?'active':''}}" href="/franchise">Franchise</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{($title==="BranchPage")?'active':''}}" href="/branch">Branch</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
{{-- end of navbar --}}
