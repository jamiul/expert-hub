
@include('frontend.layouts.front-top-client-dashboard-navbarmain')


@if (request()->is('figma/client-dashboard') or request()->is('figma/client-dashboardallcontact'))

<div class="header-bar">
  <nav>
    <ul>
      <li>
        <a class="nav-link {{ request()->is('figma/client-dashboard') ? 'active-icon' : '' }}"  href="/figma/client-dashboard" >All Projects
        <span class="material-symbols-outlined active"> arrow_drop_up </span>
        </a>
      </li>
      <li>
        <a class="nav-link {{ request()->is('figma/client-dashboard') ? '!active' : 'active-icon' }}" href="/figma/client-dashboardallcontact" >All Contracts</a>
      </li>

    </ul>
  </nav>
</div>

@elseif (request()->is('figma/client-dashboardexperthire') or request()->is('figma/client-dashboardexpertconsultant') or request()->is('figma/client-dashboardexpertconsultantteam') or request()->is('figma/client-clientdashboardexpertsave'))

<div class="header-bar">
  <nav>
    <ul>
      <li>
        <a class="nav-link {{ request()->is('figma/client-dashboardexperthire') ? 'active-icon' : '' }}"  href="/figma/client-dashboardexperthire" >Hire Experts
        <span class="material-symbols-outlined active expert-root"> arrow_drop_up </span>
        </a>
      </li>

      <li>
        <a class="nav-link {{ (request()->is('figma/client-dashboardexperthire') || request()->is('figma/client-dashboardexpertconsultantteam') || request()->is('figma/client-clientdashboardexpertsave')) ? '!active' : 'active-icon' }}" href="/figma/client-dashboardexpertconsultant" >Find Consultants</a>
      </li>

      <li>
        <a class="nav-link {{ (request()->is('figma/client-dashboardexperthire') || request()->is('figma/client-dashboardexpertconsultant') || request()->is('figma/client-clientdashboardexpertsave')) ? '!active' : 'active-icon' }}" href="/figma/client-dashboardexpertconsultantteam" >Find Expert Database</a>
      </li>
      <li>
        <a class="nav-link {{ (request()->is('figma/client-dashboardexperthire') || request()->is('figma/client-dashboardexpertconsultant') || request()->is('figma/client-dashboardexpertconsultantteam')  ) ? '!active' : 'active-icon' }}" href="/figma/client-clientdashboardexpertsave" >Saved Experts</a>
      </li>
    </ul>
  </nav>
</div>

@elseif (request()->is('figma/client-clientaddpayment') or request()->is('figma/client-weeklyreportsummary') or request()->is('figma/client-weeklyreporttransction') or request()->is('figma/client-weeklyreporttwobudget') )

<div class="header-bar">
  <nav>
    <ul>
      <li>
        <a class="nav-link {{ request()->is('figma/client-clientaddpayment') ? 'active-icon' : '' }}"  href="/figma/client-clientaddpayment" >Add Payment Method
        <span class="material-symbols-outlined active payment-root"> arrow_drop_up </span>
        </a>
      </li>

      <li>
        <a class="nav-link {{ (request()->is('figma/client-clientaddpayment') || request()->is('figma/client-dashboardatimesheet') || request()->is('figma/client-weeklyreporttwobudget')  || request()->is('figma/client-weeklyreporttransction')) ? '!active' : 'active-icon' }}" href="/figma/client-weeklyreportsummary" >Weekly  Summery</a>
      </li>

      <li>
        <a class="nav-link {{ (request()->is('figma/client-weeklyreportsummary') || request()->is('figma/client-dashboardatimesheet') || request()->is('figma/client-weeklyreporttwobudget')  || request()->is('figma/client-clientaddpayment')) ? '!active' : 'active-icon' }}" href="/figma/client-weeklyreporttransction" >Transaction History</a>
      </li>

      <li>
        <a class="nav-link {{ (request()->is('figma/client-weeklyreportsummary') || request()->is('figma/client-dashboardatimesheet') || request()->is('figma/client-weeklyreporttransction') || request()->is('figma/client-clientaddpayment')) ? '!active' : 'active-icon' }}" href="/figma/client-weeklyreporttwobudget">Budgets</a>
      </li>



      <li>
        <a class="nav-link {{ (request()->is('figma/client-weeklyreportsummary') || request()->is('figma/client-weeklyreporttwobudget') || request()->is('figma/client-weeklyreporttransction') || request()->is('figma/client-clientaddpayment')) ? '!active' : 'active-icon' }}" href="/figma/client-dashboardatimesheet">Timesheet</a>
      </li>

    </ul>
  </nav>
</div>


@elseif (request()->is('figma/client-passwordsecurity') or request()->is('figma/client-dashboardallcontact'))

<div class="header-bar">
  <nav>
    <ul>
      <li>
        <a class="nav-link {{ request()->is('figma/client-passwordsecurity') ? 'active-icon' : '' }}"  href="/figma/client-passwordsecurity" > PassWord & Security
        <span class="material-symbols-outlined active setting-root"> arrow_drop_up </span>
        </a>
      </li>
      <li>
        <a class="nav-link {{ request()->is('figma/client-passwordsecurity') ? '!active' : 'active-icon' }}" href="/figma/client-notificationsettting" >Notification</a>
      </li>

    </ul>
  </nav>
</div>


@endif



<script>
   // Stop dropdown close option when click inside the menu
   function stopPropagation(event) {
      event.stopPropagation();
   }
</script>