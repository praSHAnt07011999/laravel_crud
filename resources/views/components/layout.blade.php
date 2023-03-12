<<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="margin-bottom:10px;">
    <a class="navbar-brand">UIMS</a>
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link disabled" href="{{url('/register')}}" tabindex="-1" aria-disabled="true">Register</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link disabled" href="{{url('/students')}}" tabindex="-1" aria-disabled="true">View</a>
            </li>
        </ul>
    </div>
</nav>