@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-9 col-md-offset-1">

                {{--<div class="nav-tabs-custom">--}}

                    {{--<div class="progress progress-sm active">--}}
                        {{--<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">--}}
                            {{--<span class="sr-only">20% Complete</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--Shared state--}}
                <wizard>
                    <wizard-step title="Usuari">
                        Step 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et minus quia quis totam veritatis? Animi aut blanditiis esse recusandae velit voluptatem. Consectetur corporis dolor hic maxime nam officiis perferendis, reiciendis.
                    </wizard-step>
                    <wizard-step title="Dades personals">
                        Step 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores distinctio error expedita ipsa laboriosam libero nulla reprehenderit tenetur. Accusantium animi et fuga itaque iure nam numquam quia sapiente, tempora voluptatum?
                    </wizard-step>
                    <wizard-step title="Estudi i curs">
                        Step 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores assumenda incidunt iure molestiae mollitia quas repellendus sapiente vel! Aperiam cumque eius facere incidunt maiores nihil nisi provident repellendus sequi voluptatibus!
                    </wizard-step>
                    <wizard-step title="Mòduls professionals">
                        Step 4. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab autem consequuntur dolorum numquam odio quasi qui quisquam quod soluta? At dicta dignissimos doloremque fuga laboriosam numquam perferendis placeat sint velit.
                    </wizard-step>
                    <wizard-step title="Unitats formatives">
                        Step 5. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid aspernatur at dolore, dolores esse in officiis quibusdam quis tempore, temporibus vel. Accusamus ad amet dicta hic, impedit itaque temporibus.
                    </wizard-step>
                </wizard>


                    {{--<ul class="nav nav-tabs nav-justified">--}}
                        {{--<li class="active"><a href="#tab_1" data-toggle="tab">Tab 1</a></li>--}}
                        {{--<li><a href="#tab_2" data-toggle="tab">Tab 2</a></li>--}}
                        {{--<li><a href="#tab_3" data-toggle="tab">Tab 3</a></li>--}}
                    {{--</ul>--}}
                    {{--<div class="tab-content">--}}
                        {{--<div class="tab-pane active" id="tab_1">--}}
                            {{--<b>How to use:</b>--}}

                            {{--<p>Exactly like the original bootstrap tabs except you should use--}}
                                {{--the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>--}}
                            {{--A wonderful serenity has taken possession of my entire soul,--}}
                            {{--like these sweet mornings of spring which I enjoy with my whole heart.--}}
                            {{--I am alone, and feel the charm of existence in this spot,--}}
                            {{--which was created for the bliss of souls like mine. I am so happy,--}}
                            {{--my dear friend, so absorbed in the exquisite sense of mere tranquil existence,--}}
                            {{--that I neglect my talents. I should be incapable of drawing a single stroke--}}
                            {{--at the present moment; and yet I feel that I never was a greater artist than now.--}}
                        {{--</div>--}}
                        {{--<!-- /.tab-pane -->--}}
                        {{--<div class="tab-pane" id="tab_2">--}}
                            {{--The European languages are members of the same family. Their separate existence is a myth.--}}
                            {{--For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ--}}
                            {{--in their grammar, their pronunciation and their most common words. Everyone realizes why a--}}
                            {{--new common language would be desirable: one could refuse to pay expensive translators. To--}}
                            {{--achieve this, it would be necessary to have uniform grammar, pronunciation and more common--}}
                            {{--words. If several languages coalesce, the grammar of the resulting language is more simple--}}
                            {{--and regular than that of the individual languages.--}}
                        {{--</div>--}}
                        {{--<!-- /.tab-pane -->--}}
                        {{--<div class="tab-pane" id="tab_3">--}}
                            {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
                            {{--Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,--}}
                            {{--when an unknown printer took a galley of type and scrambled it to make a type specimen book.--}}
                            {{--It has survived not only five centuries, but also the leap into electronic typesetting,--}}
                            {{--remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset--}}
                            {{--sheets containing Lorem Ipsum passages, and more recently with desktop publishing software--}}
                            {{--like Aldus PageMaker including versions of Lorem Ipsum.--}}
                        {{--</div>--}}
                        {{--<!-- /.tab-pane -->--}}
                    {{--</div>--}}
                    {{--<!-- /.tab-content -->--}}
                    {{--<div class="box-footer">--}}
                        {{--<button type="submit" class="btn btn-primary btn-flat pull-left">Previous</button>--}}
                        {{--<button type="submit" class="btn btn-primary btn-flat pull-right">Next</button>--}}
                    {{--</div>--}}
                {{--</div>--}}

			</div>
		</div>
	</div>
@endsection
