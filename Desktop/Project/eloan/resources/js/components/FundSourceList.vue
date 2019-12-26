<template>
    <div class="container pt-5">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Fund Source</h3>

                <div class="card-tools">
                    <button class="btn btn-success" data-toggle="modal" data-target="#CreateFundSource">
                        <i class="nav-icon fas fa-user-plus"></i>
                        New Fund
                    </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Fund Source Name</th>
                      <th>Description</th>
                      <th>Fund Source Code</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td> Youth Fund Development</td>
                      <td>This is the fund for ..../2022</td>
                      <td>21400-0000144-001 </td>
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
        <div class="modal fade" id="CreateFundSource" tabindex="-1" role="dialog" aria-labelledby="CreateFundSourceModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateFundSourceModal">New Fund Source </h5>
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
                            <input v-model="form.fundSourceCode" type="text" name="fundSourceCode" 
                                 placeholder="Enter Fund Source Code"
                                 class="form-control" :class="{ 'is-invalid': form.errors.has('fundSourceCode') }">
                        <has-error :form="form" field="fundSourceCode"></has-error>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="nav-icon fas fa-sort-numeric-up"></i>
                                </span>
                            </div>
                            <input v-model="form.fundSourceName" type="text" name="fundSourceName" 
                                 placeholder="Enter Fund Source Name"
                                 class="form-control" :class="{ 'is-invalid': form.errors.has('fundSourceName') }">
                        <has-error :form="form" field="fundSourceName"></has-error>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="nav-icon fas fa-puzzle-piece"></i>
                                </span>
                            </div>
                            <textarea v-model="form.fundSourceDescr" type="text" name="fundSourceDescr"
                                placeholder="Enter Fund Source Description"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('fundSourceDescr') }">
                            </textarea>
                        <has-error :form="form" field="fundSourceDescr"></has-error>
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
                    fundSourceCode: '',
                    fundSourceName: '',
                    fundSourceDescr: ''

                })
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
