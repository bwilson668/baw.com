<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!

                        <div class="form-group">
                            <label for="post">Post:</label>
                            <textarea class="form-control" id="post" name="post" rows="10" v-model="post" spellcheck="true"></textarea>
                        </div>

                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#preview-modal">
                            Preview
                        </button>
                    </div>
                </div>
            </div>
         </div>

        <pre>{{ $data | json }}</pre>
    </div>



    <div id="preview-modal" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss"modal">&times;</button>
                    <h4 class="modal-title">Post Preview</h4>
                </div>
                <div class="modal-body">
                    <div v-html="post | marked"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                post: 'Hello'
            };
        },

        ready() {
            console.log('Component ready.')
        }
    }
</script>
