<div class="menu">
	<div class="heading">
		<p>Account panel</p>
		<div class="menu-icon js-toggle-menu">
			☰
		</div>
	</div>
	<div class="wrap">
		@if(Auth::user()->isAdmin())
			<a href="{{route('admin.dashboard')}}">Dashboard</a>
			<a href="{{route('user.edit')}}">Account</a>
			<p class="title"></p>
			<div class="dropdown">
				<p>Leeds</p>
				<div class="links">
					<a href="{{route('admin.leed.index')}}">All Leeds</a>
					<a href="{{route('admin.leed.listPaid')}}">Leeds Paid</a>
					<a href="{{route('admin.leed.list')}}">Leeds Not Paid</a>
				</div>
			</div>
			
			
			<p class="title"></p>
			<a href="{{route('admin.transaction.index')}}">Transactions</a>
			<div class="dropdown">
				<p>Coupons</p>
				<div class="links">
					<a href="{{route('admin.coupon.index')}}">All Coupons</a>
					<a href="{{route('admin.coupon.create')}}">Create Coupon</a>
				</div>
			</div>
			<div class="dropdown">
				<p>Permissions</p>
				<div class="links">
					<a href="{{route('admin.permission.index')}}">All Permission</a>
					<a href="{{route('admin.permission.create')}}">Create Permission</a>
				</div>
			</div>
			<p class="title"></p>
			<div class="dropdown">
				<p>Users</p>
				<div class="links">
					<a href="{{route('admin.user.index')}}">All Users</a>
					<a href="{{route('admin.user.create')}}">Create User</a>
				</div>
			</div>
			<div class="dropdown">
				<p>Courses</p>
				<div class="links">
					<a href="{{route('admin.course.index')}}">All Courses</a>
					<a href="{{route('admin.course.create')}}">Create Course</a>
				</div>
			</div>
			<div class="dropdown">
				<p>Videos</p>
				<div class="links">
					<a href="{{route('admin.video.index')}}">All Videos</a>
					<a href="{{route('admin.video.list')}}">List all Videos</a>
					<a href="{{route('admin.video.create')}}">Create Video</a>
				</div>
			</div>
			<a href="{{route('admin.comment.index')}}">Comments</a>
			<div class="dropdown">
				<p>Sms</p>
				<div class="links">
					<a href="{{route('admin.sms.index')}}">All Sms</a>
					<a href="{{route('admin.sms.create')}}">Send Sms</a>
				</div>
			</div>
		@else
			<a href="{{route('user.dashboard')}}">Dashboard</a>
			<a href="{{route('user.edit')}}">Account</a>
			<a href="{{route('user.course.index')}}">Kurslar</a>
			<a href="{{route('user.transactions')}}">To'lovlar tarixi</a>
		@endif
		<p><a class="btn btn-danger" style="color:white; max-width:110px" href="{{ route('signout') }}">Chiqib ketish</a></p>
	</div>
</div>