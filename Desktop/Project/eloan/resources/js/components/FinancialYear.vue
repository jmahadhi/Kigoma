<template>
    <div class="container pt-5">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Registed Financial Year</h3>

                <div class="card-tools">
                    <button class="btn btn-success" data-toggle="modal" data-target="#CreateFinancialYear">
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
                      <th>Code</th>
                      <th>Name</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td> 001</td>
                      <td>2021/2022</td>
                      <td>
                          <a href="#">
                              <i class="nav-icon fas fa-lock"></i>
                          </a>
                      </td>
                      <td>
                          <a href="#">
                              <i class="nav-icon fa fa-edit green"></i>
                          </a> |
                          <a href="#" >
                              <i class="nav-icon fa fa-trash red"></i>
                          </a>
                      </td>
                    </tr>

                     <tr>
                      <td>183</td>
                      <td> 002</td>
                      <td>2022/2023</td>
                       <td>
                          <a href="#">
                              <i class="nav-icon fas fa-lock-open"></i>
                          </a>
                      </td>
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
        <div class="modal fade" id="CreateFinancialYear" tabindex="-1" role="dialog" aria-labelledby="CreateFinancialYearModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateFinancialYearModal">Add Unit </h5>
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
                            <input v-model="form.firstName" type="text" name="fnCode" 
                                 placeholder="Enter Organisation Code"
                                 class="form-control" :class="{ 'is-invalid': form.errors.has('fnCode') }">
                        <has-error :form="form" field="fnCode"></has-error>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="nav-icon fas fa-puzzle-piece"></i>
                                </span>
                            </div>
                            <input v-model="form.middleName" type="text" name="fnName"
                                placeholder="Enter Organisation Name"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('fnName') }">
                        <has-error :form="form" field="fnName"></has-error>
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
                    fnCode: '',
                    fnName: '',

                })
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
