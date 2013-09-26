                <div class="modal fade" id="createJob" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Create new job</h4>
                </div>
                <div class="modal-body">
		<p>
			<form action="createjob_action.php" method="post">	
			<form class="form-horizontal">
			<fieldset>
			<div class="control-group">
				<label class="control-label" for="jobname">Job Name</label>
  				<div class="controls">
    					<input id="jobname" name="jobname" type="text" class="input-xlarge">
  				</div>
			</div>

			<div class="control-group">
  				<label class="control-label" for="description">Description</label>
  				<div class="controls">
    					<input id="description" name="description" type="text" class="input-xlarge">
  				</div>
			</div>

			<div class="control-group">
 				<label class="control-label" for="tags">Tags</label>
  				<div class="controls">
    					<input id="tags" name="tags" type="text" class="input-xlarge">
    
  				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="requiredvars">Required Variables</label>
  				<div class="controls">
    					<input id="requiredvars" name="requiredvars" type="text" class="input-xlarge">
  				</div>
			</div>

			<div class="control-group">
  				<label class="control-label" for="servers">Apply to servers</label>
  				<div class="controls">
    					<select id="server" name="server[]" class="input-xlarge" multiple="multiple">
      					<option>Server1</option>
      					<option>Server2</option>
      					<option>Server3</option>
      					<option>Server4</option>
    					</select>
  				</div>
			</div>

			<div class="control-group">
  				<label class="control-label" for="script">Job Script</label>
  				<div class="controls">                     
    					<textarea id="script" name="script"></textarea>
  				</div>
			</div>
			</fieldset>
		</p>
  		</div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
		</form>
                </div>
                </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

