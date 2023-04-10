
<style>html,body { padding: 0; margin:0; }</style>
<div style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
	<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
		<tbody>
			<tr>
				<td align="center" valign="center" style="text-align:center; padding: 20px">
					<a href="https://zaitunsoft.com/" rel="noopener" target="_blank">
						<img alt="Logo"  height="30%"  width="30%" src="https://zaitunsoft.com/wp-content/uploads/2022/06/6-may-2-logo.png" />
					</a>
				</td>
			</tr>
			<tr>
				<td align="left" valign="center">
					<div style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
						<!--begin:Email content-->
						<div style="padding-bottom: 30px; font-size: 17px;">
							<strong>Welcome to {{ config('app.name', 'Zaitunsoft') }}!</strong>
						</div>
                        <table class="table table-transparent table-responsive">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 1%">#</th>
                                    <th>Email</th>
                                    <th class="text-center" >Payoneer Password	</th>
                                    <th class="text-center" >Email Password</th>
                                    <th class="text-center" >Recovery Email</th>
                                    <th class="text-center">Image Url</th>
                                </tr>
                            </thead>

                            @php
                                $i=1;
                            @endphp

                            @foreach ($mailData  as $product)
                                <tr>
                                    <td class="text-center">{{$i++}}</td>
                                    <td>{{$product->product?->email}}</td>
                                    <td>{{$product->product?->payoneer_password	}}</td>
                                    <td class="text-end">{{$product->product?->email_password}}</td>
                                    <td class="text-end">{{$product->product?->recovery_email}}</td>
                                    <td class="text-end"><a href="{{$product?->product?->f_image_link}}">click</a></td>
                                </tr>
                            @endforeach

                        </table>


						{{-- <div style="padding-bottom: 30px">    <h1>{{ $mailData['title'] }}</h1>
                            <p>{{ $mailData['body'] }}</p></div> --}}
						<div style="padding-bottom: 40px; text-align:center;">
							<a href="" rel="noopener" style="text-decoration:none;display:inline-block;text-align:center;padding:0.75575rem 1.3rem;font-size:0.925rem;line-height:1.5;border-radius:0.35rem;color:#ffffff;background-color:;border:0px;margin-right:0.75rem!important;font-weight:600!important;outline:none!important;vertical-align:middle" target="_blank"></a>
						</div>
						<div style="padding-bottom: 30px"></div>
						<div style="border-bottom: 1px solid #eeeeee; margin: 15px 0"></div>
						<div style="padding-bottom: 50px; word-wrap: break-all;">
							<p style="margin-bottom: 10px;">If those credentials are not working, please conatct with  team</p>
							<a href="" rel="noopener" target="_blank" style="text-decoration:none;color:"></a>
						</div>
						<!--end:Email content-->
						<div style="padding-bottom: 10px">Kind regards,
						<br>The Zaitunsoft Team.
						<tr>
							<td align="center" valign="center" style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">
								<p>Dinajpur, Bangladesh.</p>
								<p>Copyright &copy;
								<a href="" rel="noopener" target="_blank">zaitunsoft</a>.</p>
							</td>
						</tr></br></div>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</div>
