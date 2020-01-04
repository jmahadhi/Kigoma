<template>
    <div class="container pt-5">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Registered Users</h3>

                <div class="card-tools">
                    <button class="btn btn-success" data-toggle="modal" data-target="#createUser">
                        <i class="nav-icon fas fa-user-plus"></i>
                        Add New
                    </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>
                          <a href="#">
                              <i class="nav-icon fa fa-edit green"></i>
                          </a> |
                          <a href="#">
                              <i class="nav-icon fa fa-trash red"></i>
                          </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

                <!-- Modal -->
        <div class="modal fade" id="createUser" tabindex="-1" role="dialog" aria-labelledby="CreateUserModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateUserModalLabel">Add User </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group mr-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nav-icon fas fa-user-tie"></i>
                                    </span>
                                </div>
                                <input v-model="form.userName" type="text" name="userName"
                                    placeholder="Enter User Name" class="form-control" 
                                    :class="{ 'is-invalid': form.errors.has('userName') }">
                                    <has-error :form="form" field="userName"></has-error>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nav-icon fas fa-user"></i>
                                    </span>
                                </div>
                                <input v-model="form.firstName" type="text" name="firstName"
                                    placeholder="Enter First Name" class="form-control" 
                                    :class="{ 'is-invalid': form.errors.has('firstName') }">
                                    <has-error :form="form" field="firstName"></has-error>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group mr-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nav-icon fas fa-user"></i>
                                    </span>
                                </div>
                                <input v-model="form.middleName" type="text" name="middleName" 
                                    placeholder="Enter Middle Name" required
                                        class="form-control" :class="{ 'is-invalid': form.errors.has('middleName') }">
                                    <has-error :form="form" field="middleName"></has-error>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nav-icon fas fa-user"></i>
                                    </span>
                                </div>
                                <input v-model="form.lastName" type="text" name="lastName"
                                    placeholder="Enter Last Name"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('lastName') }">
                                    <has-error :form="form" field="lastName"></has-error>
                            </div>
                        </div>
                    </div>

                    <div class="form-col">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input v-model="form.lastName" type="email" name="emailAddress"
                                    placeholder="Enter Email Address"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('emailAddress') }">
                                <has-error :form="form" field="emailAddress"></has-error>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group mr-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nav-icon fas fa-map-marker-alt"></i>
                                    </span>
                                </div>
                                <select class="form-control" id="organisationLevel" name="organisationLevel">
                                    <option>Select organisation Level</option>
                                    <option value="1">National</option>
                                    <option value="2">Regiional</option>
                                    <option value="3">District</option>
                                </select>
                            </div>                     
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nav-icon fas fa-user-tag"></i>
                                    </span>
                                </div>
                                <select class="form-control" id="UserRole" name="UserRole">
                                    <option>Select User Role</option>
                                    <option value="1">Super Admin</option>
                                    <option value="2">Admin</option>
                                    <option value="3">User</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <i class="nav-icon fas fa-window-close fa-fw"></i>Close</button>
                    <button type="button" class="btn btn-primary">
                        <i class="nav-icon fas fa-save fa-fw"></i>Create</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form : new Form({
                    firstName: '',
                    middleName: '',
                    lastName: '',
                    emailAddress: '',
                    organisationLevel: '',
                    userRole: '',

                })
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
