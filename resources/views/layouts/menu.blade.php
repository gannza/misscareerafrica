<li class="{{ Request::is('sessions*') ? 'active' : '' }}">
    <a href="{!! route('sessions.index') !!}"><i class="fa fa-edit"></i><span>Sessions</span></a>
</li>


<li class="{{ Request::is('candidates*') ? 'active' : '' }}">
    <a href="{!! route('candidates.index') !!}"><i class="fa fa-edit"></i><span>Candidates</span></a>
</li>

