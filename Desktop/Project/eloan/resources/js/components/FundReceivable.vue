<template>
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Funds Source - Receivable</h3>

                        <div class="card-tools">
                            <button class="btn btn-success" data-toggle="modal" data-target="#CreatedFundRec">
                                <i class="nav-icon fas fa-user-plus"></i>
                                New Receivable
                            </button>
                        </div>
                    </div>
                     <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Receipt ID</th>
                                    <th>Fund Source Name</th>
                                    <th>Date</th>
                                    <th>Amount Received</th>
                                    <th>Created By</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>183</td>
                                    <td> 001</td>
                                    <td>2021/2022</td>
                                    <td>Quarter One</td>
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
                                    <td>2021/2022</td>
                                    <td>Quarter Two</td>
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
        <div class="modal fade" id="CreatedFundRec" tabindex="-1" role="dialog" aria-labelledby="CreatedFundRecModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="CreatedFundRecModal">New Receivable </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                </div>
                                <input v-model="form.date" placeholder="dd/mm/yyyy" type="text" class="form-control" data-inputmask-alias="datetime" 
                                data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nav-icon fas fa-sort-numeric-up"></i>
                                    </span>
                                </div>
                                <input v-model="form.receiptAmount" type="text" name="receiptAmount" 
                                    placeholder="Enter Received Amount"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('receiptAmount') }">
                                    <has-error :form="form" field="receiptAmount"></has-error>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nav-icon fas fa-puzzle-piece"></i>
                                    </span>
                                </div>
                                <textarea v-model="form.fundDescription" type="text" name="fundDescription"
                                    placeholder="Enter Organisation Name"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('fundDescription') }">
                                </textarea>
                                <has-error :form="form" field="fundDescription"></has-error>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nav-icon fas fa-info-circle"></i>
                                    </span>
                                </div>
                                <select class="form-control" id="fundSource" name="fundSource">
                                    <option>Select Fund Source</option>
                                    <option value="1">Own Source</option>
                                    <option value="2">Youth Development Funds (YDF)</option>
                                    <option value="3">Revolving Funds</option>
                                    <option value="4">Women Development Fund(WDF)</option>
                                </select>
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
                    fundDescription: '',
                    receiptAmount: '',
                    date: ''

                })
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
