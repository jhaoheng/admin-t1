<h1 class="page-header">{{ apiver }}</h1>

{% for key, value in groupItem %}

<div>
	<div class="panel">
		<div class="panel-heading" role="tab" id="headingOne">
			<h4>
				<a data-toggle="collapse" data-parent="" href="#{{ key }}" aria-expanded="false" aria-controls="{{ key }}">
					{{ value['name']|e }}
				</a>
			</h4>

			<div id="{{ key }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="{{ key }}">
				<div class="panel-group" id="" role="" aria-multiselectable="true">

					{% for key2, value2 in value['item'] %}

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#{{ key }}-{{ key2 }}" aria-expanded="false" aria-controls="{{ key }}-{{ key2 }}">
									{{ value2['name']|e }} - {{ key }}-{{ key2 }}<br>
								</a>
							</h4>
						</div>
						<div id="{{ key }}-{{ key2 }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								{{ value2['request']['url']|e }} <br>
								{{ value2['request']['method']|e }}<br>


								{% for index in 0..value2['request']['header']|length-1 %}
									{{ value2['request']['header'][index]['key'] }} = {{ value2['request']['header'][index]['value'] }} <br>
								{% endfor %}

								{% for key3, value3 in value2['request']['body'] %}
									{{ key3 }} = {{ value3 ? value3 :"null"}}<br>
								{% endfor %}

								{{ value2['request']['description']|e }}
							</div>
						</div>
					</div>

					{% endfor %}

				</div>
			</div>
		</div>
	</div>
</div>
{% endfor %}


