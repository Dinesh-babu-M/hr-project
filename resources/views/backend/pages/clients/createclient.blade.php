@extends('backend.layout.app')
@section('title', 'Create Clients')
@section('css')
@endsection

@section('navbar')
<div class="sub-header-container">
    <header class="header navbar navbar-expand-sm">
        <ul class="navbar-nav flex-row">
            <li>
                <div class="page-header">
                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Create Clients</span></li>
                        </ol>
                    </nav>
                </div>
            </li>
        </ul>
    </header>
</div>
@endsection

@section('content')
<div class="col-lg-12 layout-spacing">
    <div class="statbox widget box box-shadow mb-4">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Create Client</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            @if (session('status'))
            <div class="alert alert-success mt-3">
                {{ session('status') }}
            </div>
            @endif
            <div class="w-100">
                <form action="{{ route('clients.store') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>Company Name:</label>
                            <input type="text" name="company_name" class="form-control" placeholder="Enter company name"
                                required>
                            <span class="form-text text-muted">Please enter the company name</span>
                        </div>
                        <div class="col-lg-4">
                            <label>Company Email:</label>
                            <input type="email" name="company_email" class="form-control"
                                placeholder="Enter company email" required>
                            <span class="form-text text-muted">Please enter the company email</span>
                        </div>
                        <div class="col-lg-4">
                            <label>HR Manager Name:</label>
                            <input type="text" name="hr_manager_name" class="form-control"
                                placeholder="Enter HR manager name" required>
                            <span class="form-text text-muted">Please enter the HR manager's name</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>HR Manager Email:</label>
                            <input type="email" name="hr_manager_email" class="form-control"
                                placeholder="Enter HR manager email" required>
                            <span class="form-text text-muted">Please enter the HR manager's email</span>
                        </div>
                        <div class="col-lg-4">
                            <label>HR Manager Phone:</label>
                            <input type="text" name="hr_manager_phone" class="form-control"
                                placeholder="Enter HR manager phone" required>
                            <span class="form-text text-muted">Please enter the HR manager's phone</span>
                        </div>
                        <div class="col-lg-4">
                            <label>Roles:</label>
                            <div class="input-group mb-2">
                                <input type="text" id="customRoleInput" class="form-control" placeholder="Enter role"
                                    aria-label="Role">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-secondary" onclick="addRole()">Add
                                        Role</button>
                                </div>
                            </div>
                            <div id="additionalRoles"></div>
                            <input type="hidden" id="rolesArray" name="roles[]">
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <label>About Company:</label>
                            <textarea name="company_about" class="form-control" rows="3"
                                placeholder="Enter about the company"></textarea>
                            <span class="form-text text-muted">Please enter information about the company</span>
                        </div>
                    </div>
                    <div class="widget-footer text-right">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-outline-primary">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
.role-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.remove-role-icon {
    margin-left: 8px;
    font-weight: bold;
    font-size: 16px;
}
</style>

<script>
    let rolesArray = []; // Initialize an array to store roles

    function addRole() {
        const roleInput = document.getElementById('customRoleInput');
        const roleValue = roleInput.value.trim();

        if (roleValue) {
            // Check if the role already exists in the array
            if (rolesArray.includes(roleValue)) {
                alert('This role has already been added.');
                return;
            }

            // Add role to the array
            rolesArray.push(roleValue);

            // Create a new div for the added role
            const roleDiv = document.createElement('div');
            roleDiv.className = 'role-item mb-1'; 
            roleDiv.textContent = roleValue;

            // Create a remove icon
            const removeIcon = document.createElement('span');
            removeIcon.className = 'remove-role-icon';
            removeIcon.innerHTML = '&times;'; 
            removeIcon.style.cursor = 'pointer';
            removeIcon.style.color = 'red'; 
            removeIcon.onclick = function() {
                removeRole(roleValue, roleDiv); 
            };

            roleDiv.appendChild(removeIcon);
            document.getElementById('additionalRoles').appendChild(roleDiv);
            updateRolesInput();
            roleInput.value = '';
        } else {
            alert('Please enter a role before adding.');
        }
    }

    function removeRole(roleValue, roleDiv) {
        rolesArray = rolesArray.filter(role => role !== roleValue);
        roleDiv.remove(); 
        updateRolesInput();
    }

    function updateRolesInput() {
        document.getElementById('rolesArray').value = rolesArray.join(',');
    }
</script>
@endsection




@section('modal')
@endsection


@section('script')
@endsection