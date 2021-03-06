						@extends('layout.master')

						@section('title', 'Edit Profile')

						@section('main')

						@if(session('type') == "teacher" && isset($teacher))
						<form method="post" name="teacher">
							@csrf
							<table class="table profile">
								<tbody>
									<tr>
										<td>
											<img src="{{url('/').'/upload/teacherPhoto/'.$teacher->profile_photo}}" class="img-thumbnail">	
										</td>
										<td>
											<span>Name: </span><h5><input type="text" class="form-control" name="name" value="{{$teacher->name}}"/></h5>
										</td>
									</tr>
									<tr>
										<td>
											ID: 	
										</td>
										<td>
											<input type="text" class="form-control" name="id" readonly value="{{$teacher->id}}"/>
										</td>
									</tr>
									<tr>
										<td>
											Password: 	
										</td>
										<td>
											<input type="password" class="form-control" name="password" value="{{$teacher->password}}"/>
										</td>
									</tr>
									<tr>
										<td>
											Department: 	
										</td>
										<td>
											<input type="text" class="form-control" name="dept" value="{{$teacher->dept}}"/>
										</td>
									</tr>
									<tr>
										<td>
											Qualification: 	
										</td>
										<td>
											<input type="text" class="form-control" name="qualification" value="{{$teacher->qualification}}"/>
										</td>
									</tr>
									<tr>
										<td>
											Email: 	
										</td>
										<td>
											<input type="email" class="form-control" name="email" value="{{$teacher->email}}"/>
										</td>
									</tr>
									<tr>
										<td></td>
										<td>
											<button type="submit" class="btn btn-primary btn-block">
												Save
											</button> 	
										</td>
									</tr>
								</tbody>
							</table>
						</form>
						
						@elseif(session('type') == "student" && isset($student))
						<form method="post" name="student">
							@csrf
							<table class="table profile">
								<tbody>
									<tr>
										<td>
											<img src="{{url('/').'/upload/studentPhoto/'.$student->profile_photo}}" class="img-thumbnail">	
										</td>
										<td>
											<span>Name: </span><h5><input type="text" class="form-control" name="name"  value="{{$student->name}}"/></h5>
										</td>
									</tr>
									<tr>
										<td>
											ID: 	
										</td>
										<td>
											<input type="text" class="form-control" name="id" readonly  value="{{$student->id}}"/>
										</td>
									</tr>
									<tr>
										<td>
											Password: 	
										</td>
										<td>
											<input type="password" class="form-control" name="password"  value="{{$student->password}}"/>
										</td>
									</tr>
									<tr>
										<td>
											Department: 	
										</td>
										<td>
											<input type="text" class="form-control" name="dept"  value="{{$student->dept}}"/>
										</td>
									</tr>
									<tr>
										<td>
											Parent's Contact No: 	
										</td>
										<td>
											<input type="text" class="form-control" name="parentContact"  value="{{$student->parent_contact}}"/>
										</td>
									</tr>
									<tr>
										<td>
											Email: 	
										</td>
										<td>
											<input type="email" class="form-control" name="email"  value="{{$student->email}}"/>
										</td>
									</tr>
									<tr>
										<td></td>
										<td>
											<button type="submit" class="btn btn-primary btn-block">
												Save
											</button>
										</td>
									</tr>
								</tbody>
							</table>
						</form>

						@endif
						
						@endsection