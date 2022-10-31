<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('BD') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('TDL') }}</a>
        </div>
        <ul class="nav">
            <li @if ($title == 'home') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p style="color:black;">{{ __('Dashboard') }}</p>
                </a>
            </li>

            <hr class="horizontal white mt-0">

            <li @if ($title == 'tasks') class="active " @endif>
                <a href="{{ url('/tasks') }}">
                    <i class="tim-icons icon-bullet-list-67"></i>
                    <p style="color:black;">Tasks</p>
                </a>
            </li>
           
            <hr class="horizontal white mt-0">

            <li @if ($title == 'journals') class="active " @endif>
                <a href="{{ url('/journals') }}">
                    <i class="tim-icons icon-notes"></i>
                    <p style="color:black;">Journals</p>
                </a>
            </li>

            <hr class="horizontal white mt-1">

            <li @if ($title == 'goals') class="active " @endif>
                <a href="{{ url('/goals') }}">
                    <i class="tim-icons icon-spaceship"></i>
                    <p style="color:black;">Goals</p>
                </a>
            </li>
        </ul>
    </div>
</div>
