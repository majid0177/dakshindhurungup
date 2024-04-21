    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>ইউনিয়ন <i>পরিষদ</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="{{ Route('dashboard') }}" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">ড্যাশবোর্ড</span>
          </a><!-- br-menu-link -->
          <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">অ্যাডমিন এলাকা</label>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">কর্মকর্তা কর্মচারী</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ Route('staff.create') }}" class="sub-link">কর্মকর্তা কর্মচারী যোগ করুন</a></li>
            <li class="sub-item"><a href="{{ Route('staff.manage') }}" class="sub-link">কর্মকর্তা কর্মচারী ম্যানেজ করুন</a></li>
          </ul>
        </li>
        
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">করদাতা সদস্য</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
           
            <li class="sub-item"><a href="{{ Route('peoples.create') }}" class="sub-link">নতুন সদস্য যোগ করুন</a></li>
            <li class="sub-item"><a href="{{ Route('peoples.manage') }}" class="sub-link">সদস্য তালিকা ম্যানেজ করুন</a></li>
          </ul>
        </li>
        
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">কর আদায়</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
           
            <li class="sub-item"><a href="{{ Route('tax.create') }}" class="sub-link">কর আদায় করুন</a></li>
            <li class="sub-item"><a href="{{ Route('tax.manage') }}" class="sub-link">কর আদায় ম্যানেজ করুন</a></li>
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">ট্রেড লাইসেন্স  </span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
           
            <li class="sub-item"><a href="{{ Route('tradelicense.create') }}" class="sub-link">ট্রেড লাইসেন্সের   তথ্য যোগ করুন</a></li>
            <li class="sub-item"><a href="{{ Route('tradelicense.manage') }}" class="sub-link">ট্রেড লাইসেন্সের   তথ্য ম্যানেজ করুন</a></li>
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">ওয়ারিশান সনদ</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
           
            <li class="sub-item"><a href="{{ Route('wareshinfo.create') }}" class="sub-link">ওয়ারিশান সনদ যোগ করুন</a></li>
            <li class="sub-item"><a href="{{ Route('wareshinfo.manage') }}" class="sub-link">ওয়ারিশান সনদ ম্যানেজ করুন</a></li>
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">পারিবারিক সনদ</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
           
            <li class="sub-item"><a href="{{ Route('wareshinfo.create') }}" class="sub-link">পারিবারিক সনদ যোগ করুন</a></li>
            <li class="sub-item"><a href="{{ Route('wareshinfo.manage') }}" class="sub-link">পারিবারিক সনদ ম্যানেজ করুন</a></li>
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">প্রত্যয়ন পত্র</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
           
            <li class="sub-item"><a href="{{ Route('wareshinfo.create') }}" class="sub-link">প্রত্যয়ন পত্র যোগ করুন</a></li>
            <li class="sub-item"><a href="{{ Route('wareshinfo.manage') }}" class="sub-link">প্রত্যয়ন পত্র ম্যানেজ করুন</a></li>
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">উপকারভোগীর তালিকা</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
           
            <li class="sub-item"><a href="{{ Route('wareshinfo.create') }}" class="sub-link">উপকারভোগীর তালিকা যোগ করুন</a></li>
            <li class="sub-item"><a href="{{ Route('wareshinfo.manage') }}" class="sub-link">উপকারভোগীর তালিকা ম্যানেজ করুন</a></li>
          </ul>
        </li>
         <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">রিপোর্ট</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
           
            <li class="sub-item"><a href="{{ Route('assesment') }}" class="sub-link">এসেসমেন্ট রিপোর্ট </a></lli>
          </ul>
        </li>
        
         
        
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">নাগরিক </span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
           
            <li class="sub-item"><a href="{{ Route('nagorik.create') }}" class="sub-link">নাগরিকের  তথ্য যোগ করুন</a></li>
            <li class="sub-item"><a href="{{ Route('nagorik.manage') }}" class="sub-link">নাগরিকের  তথ্য ম্যানেজ করুন</a></li>
          </ul>
        </li>
        
        
        
      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->