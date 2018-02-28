<li class="{{ Request::is('clients*') ? 'active' : '' }}">
    <a href="{!! route('clients.index') !!}"><i class="fa fa-edit"></i><span>Clients</span></a>
</li>

<li class="{{ Request::is('clientsses*') ? 'active' : '' }}">
    <a href="{!! route('clientsses.index') !!}"><i class="fa fa-edit"></i><span>Clientsses</span></a>
</li>

<li class="{{ Request::is('clients*') ? 'active' : '' }}">
    <a href="{!! route('clients.index') !!}"><i class="fa fa-edit"></i><span>Clients</span></a>
</li>






<li class="{{ Request::is('projects*') ? 'active' : '' }}">
    <a href="{!! route('projects.index') !!}"><i class="fa fa-edit"></i><span>Projects</span></a>
</li>

<li class="{{ Request::is('galleryProjects*') ? 'active' : '' }}">
    <a href="{!! route('galleryProjects.index') !!}"><i class="fa fa-edit"></i><span>Gallery  Projects</span></a>
</li>

<li class="{{ Request::is('catProjects*') ? 'active' : '' }}">
    <a href="{!! route('catProjects.index') !!}"><i class="fa fa-edit"></i><span>Cat Projects</span></a>
</li>

<li class="{{ Request::is('services*') ? 'active' : '' }}">
    <a href="{!! route('services.index') !!}"><i class="fa fa-edit"></i><span>Services</span></a>
</li>

<li class="{{ Request::is('siteStings*') ? 'active' : '' }}">
    <a href="{!! route('siteStings.index') !!}"><i class="fa fa-edit"></i><span>Site Stings</span></a>
</li>

<li class="{{ Request::is('sliders*') ? 'active' : '' }}">
    <a href="{!! route('sliders.index') !!}"><i class="fa fa-edit"></i><span>Sliders</span></a>
</li>

<li class="{{ Request::is('reviews*') ? 'active' : '' }}">
    <a href="{!! route('reviews.index') !!}"><i class="fa fa-edit"></i><span>Reviews</span></a>
</li>

