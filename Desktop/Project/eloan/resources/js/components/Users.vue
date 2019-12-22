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
                          </a> /
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
                    <div class="form-group">
                        <label>First Name</label>
                        <input v-model="form.firstName" type="text" name="firstName"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('firstName') }">
                        <has-error :form="form" field="firstName"></has-error>
                    </div>

                    <div class="form-group">
                        <label>Middle Name</label>
                        <input v-model="form.middleName" type="text" name="middleName"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('middleName') }">
                        <has-error :form="form" field="middleName"></has-error>
                    </div>

                    <div class="form-group">
                        <label>Last Name</label>
                        <input v-model="form.lastName" type="text" name="lastName"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('lastName') }">
                        <has-error :form="form" field="lastName"></has-error>
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

                })
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
