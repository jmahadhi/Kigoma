<template>
    <div class="container pt-5">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Organisation Group</h3>

                <div class="card-tools">
                    <button class="btn btn-success" data-toggle="modal" data-target="#CreateOrganLevel">
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
                      <th>Organisation Group Code</th>
                      <th>Organisation Group Name</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td> OgCode01</td>
                      <td>National</td>
                      <td>
                          <a href="#">
                              <i class="nav-icon fa fa-edit green"></i>
                          </a> |
                          <a href="#" >
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
        <div class="modal fade" id="CreateOrganLevel" tabindex="-1" role="dialog" aria-labelledby="CreateOrganLevelModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateOrganLevelModal">Add Organisation Group </h5>
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
                            <input v-model="form.organGroupCode" type="text" name="organGroupCode" 
                                 placeholder="Enter Organisation Group Code"
                                 class="form-control" :class="{ 'is-invalid': form.errors.has('organGroupCode') }">
                        <has-error :form="form" field="organGroupCode"></has-error>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="nav-icon fas fa-puzzle-piece"></i>
                                </span>
                            </div>
                            <input v-model="form.orgGroupName" type="text" name="orgGroupName"
                                placeholder="Enter Organisation Group Name"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('orgGroupName') }">
                        <has-error :form="form" field="orgGroupName"></has-error>
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
                    organGroupCode: '',
                    orgGroupName: '',

                })
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
