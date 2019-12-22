<template>
    <div class="container pt-5">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Registered Roles</h3>

                <div class="card-tools">
                    <button class="btn btn-success" data-toggle="modal" data-target="#createUserRoles">
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
                      <th>Role Code</th>
                      <th>Role Type</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td> R01</td>
                      <td>Super Admin</td>
                      <td>
                          <a href="#">
                              <i class="nav-icon fa fa-edit green"></i>
                          </a> 
                      </td>
                    </tr>

                     <tr>
                      <td>183</td>
                      <td> R02</td>
                      <td>Local Admin</td>
                      <td>
                          <a href="#">
                              <i class="nav-icon fa fa-edit green"></i>
                          </a> 
                      </td>
                    </tr>

                     <tr>
                      <td>183</td>
                      <td> R03</td>
                      <td>User</td>
                      <td>
                          <a href="#">
                              <i class="nav-icon fa fa-edit green"></i>
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
        <div class="modal fade" id="createUserRoles" tabindex="-1" role="dialog" aria-labelledby="CreateUserRoleModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateUserRoleModal">Add Roles </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="nav-icon fas fa-sort-numeric-up"></i>
                                </span>
                            </div>
                            <input v-model="form.firstName" type="text" name="roleCode" 
                                 placeholder="Enter Role Code"
                                 class="form-control" :class="{ 'is-invalid': form.errors.has('roleCode') }">
                        <has-error :form="form" field="roleCode"></has-error>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="nav-icon fas fa-puzzle-piece"></i>
                                </span>
                            </div>
                            <input v-model="form.middleName" type="text" name="roleName"
                                placeholder="Enter Role Name"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('roleName') }">
                        <has-error :form="form" field="roleName"></has-error>
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
                    roleCode: '',
                    roleName: '',

                })
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
