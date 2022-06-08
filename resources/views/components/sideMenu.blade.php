<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="{{ route('dashboard') }}">
                    <img src="{{ asset('public/assets/images/logo-final.png') }}" alt="" width="30%" /></a>
                </div>
                <li><a href="{{ route('dashboard') }}"> Dashboard </a></li>
                @if(!empty($allBranches))
                    @foreach($allBranches as $branches)
                        <li><a href="http://localhost/taskDemo/<?php echo str_replace(' ','_',$branches['BranchTitle']).'/'.$branches['BranchID']; ?>"> {{ $branches['BranchTitle'] }}  {{ $branches['PhoneNo'] }} </a></li>
                    @endforeach
                @endif
                <!-- <li><a href="ui-tab.html"> Admin Branch </a></li>
                <li><a href="ui-tab.html"> Land Branch </a></li>
                <li><a href="ui-tab.html"> Transfer Branch </a></li>
                <li><a href="ui-tab.html"> IT Branch </a></li>
                <li><a href="ui-tab.html"> PND Branch </a></li>
                <li><a href="ui-tab.html"> Cord Branch </a></li> -->
            
            </ul>
        </div>
    </div>
</div>