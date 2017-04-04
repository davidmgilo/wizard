@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-9 col-md-offset-1">

                <form-user></form-user>

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

			</div>
		</div>
	</div>
@endsection
