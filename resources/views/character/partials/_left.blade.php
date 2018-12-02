<div id="left-tabs" class="left-section">
	<ul>
		<li><a href="#tab-1">Race</a></li>
		<li><a href="#tab-2">Ability Scores/Feats</a></li>
		{{--<li><a href="#tab-3">Background</a></li>--}}
		<li><a href="#tab-4">Class/Level</a></li>
		{{--<li><a href="#tab-5">Spells</a></li>--}}
		<li><a href="#tab-6">Proficiencies</a></li>
		{{--<li><a href="#tab-7">Equipment</a></li> --}}
	</ul>
	<div id="tab-1" class="row">
		<h2 class="col-xs-offset-1">Race</h2>
		<h4 class="col-xs-offset-1"><i>select 1</i></h4>
		<hr class="spacer-small" />
		<div id="selectable-race" class="clearfix selectable race-wrapper">
			<button v-for="(data, key) in race_data" name="race" :value="data.id" v-bind:data-has-subrace="data.has_subraces ? 'true' : 'false'"
			 v-bind:class="character.race_id != null && character.race_id === data.id ?
					'col-xs-6 tab-interactable ui-widget-content ui-selected' : 'col-xs-6 tab-interactable ui-widget-content'">
				@{{key}}
			</button>
		</div>

		<div class="subrace-wrapper">
			<h2 class="col-xs-offset-1">Sub Race</h2>
			<h4 class="col-xs-offset-1"><i>select 1</i></h4>
			<div id="selectable-sub-race" class="clearfix selectable">
				<template v-for="(data, index) in race_data">
					<template v-for="(subrace_data, key) in data.subraces">
						<button :data-parent-race="index" :class="(character.subrace_id === subrace_data.id) ? 'col-xs-6 tab-interactable ui-widget-content ui-selected' : 'col-xs-6 tab-interactable ui-widget-content'">
							@{{key}}
						</button>
					</template>
				</template>
			</div>
		</div>
		<div style="display:none;">
			<h2 class="col-xs-offset-1">Attribute Options</h2>
			<h4 class="col-xs-offset-1"><i></i></h4>
			<div class="attribute-options">
				<div class="att-choice" v-for="(value, index) in ability_scores" v-if="value.id !== 7">
					<label :for="index">@{{index}}</label>
					<input type="checkbox" :id="index" data-amount="" >
				</div>
			</div>
		</div>
		<div style="display:none;">
			<h2 class="col-xs-offset-1">Draconic Ancestry</h2>
			<h4 class="col-xs-offset-1"><i>Select a dragon origin</i></h4>
			<div class="draconic-ancestry selectable">
				<div style="margin-bottom:20px;">
					<span>Origin</span>
					<span>Damage Type</span>
					<span>Breath Weapon</span>
				</div>
				<div>
					<button class="tab-interactable ui-widget-content">Black</button>
					<div>Acid</div>
					<div>5 by 30ft. line (Dex. save)</div>
				</div>
				<div>
					<button class="tab-interactable ui-widget-content">Blue</button>
					<div>Lightning</div>
					<div>5 by 30ft. line (Dex. save)</div>
				</div>
				<div>
					<button class="tab-interactable ui-widget-content">Brass</button>
					<div>Fire</div>
					<div>5 by 30ft. line (Dex. save)</div>
				</div>
				<div>
					<button class="tab-interactable ui-widget-content">Bronze</button>
					<div>Lightning</div>
					<div>5 by 30ft. line (Dex. save)</div>
				</div>
				<div>
					<button class="tab-interactable ui-widget-content">Copper</button>
					<div>Acid</div>
					<div>5 by 30ft. line (Dex. save)</div>
				</div>
				<div>
					<button class="tab-interactable ui-widget-content">Gold</button>
					<div>Fire</div>
					<div>15ft. cone (Dex. save)</div>
				</div>
				<div>
					<button class="tab-interactable ui-widget-content">Green</button>
					<div>Poison</div>
					<div>15ft. cone (Con. save)</div>
				</div>
				<div>
					<button class="tab-interactable ui-widget-content">Red</button>
					<div>Fire</div>
					<div>15ft. cone (Dex. save)</div>
				</div>
				<div>
					<button class="tab-interactable ui-widget-content">Silver</button>
					<div>Cold</div>
					<div>15ft. cone (Con. save)</div>
				</div>
				<div>
					<button class="tab-interactable ui-widget-content">White</button>
					<div>Cold</div>
					<div>15ft. cone (Con. save)</div>
				</div>
			</div>
		</div>
	</div>

	<div id="tab-2">
		<h2 class="text-center">Ability Scores/Feats</h2>
		<h3 class="">Abilities Variant</h2>
			<h4 class=""><i>select 1</i></h4>
			<div id="ability-scores-wrapper">
				<h4 v-on:click="resetBaseStats()">Manual Entry</h4>
				<div class="row">
					<div class="col-xs-2" v-for="(value, index) in ability_scores" v-if="value.id !== 7">
						<div class="row text-center">
							<div class="col-xs-12">
								<h4>@{{ability_scores[index].abbr}}</h4>
							</div>
							<div style="margin-bottom:7px;" class="col-xs-12">
								<small>base</small>
							</div>
							<div class="col-xs-12">
								<input v-bind:data-abs="value.full_name" class="form-control text-center input-medium" min="0" max="30" class=""
								 v-model="ability_scores[index].amount" @change="multi_function1(index)" @click="multi_function1(index)" type="number" />
							</div>
						</div>
					</div>
				</div>
				<h4 v-on:click="resetBaseStats()">Point Buy</h4>
				<div class="row">
					<div class="col-xs-2" v-for="(value, index) in ability_scores" v-if="value.id !== 7">
						<div class="row text-center">
							<div class="col-xs-12">
								<h4>@{{ability_scores[index].abbr}}</h4>
							</div>
							<div style="margin-bottom:7px;" class="col-xs-12">
								<small>total</small>
							</div>
							<div class="col-xs-12">
								<input min="0" max="30" class="form-control text-center input-medium" v-model="ability_scores[index].amount"
								 @change="multi_function1(index)" @click="multi_function1(index)" type="text" readOnly />
								<div class="text-center">
									<div><small>mod</small></div>
									<div><small v-if="ability_scores[index].mod > 0">+</small><small>@{{ability_scores[index].mod}}</small></div>
								</div>
							</div>
						</div>
						<div class=" text-center">
							<h4>=</h4>
						</div>
					</div>
					<div class="col-xs-12">
						<div style="margin-top:10px;">
							<p class="pull-left">Point Buys</p>
							<p class="pull-right"><b>@{{ability_points}}</b> <em>remaining</em></p>
						</div>
					</div>
					<div class="col-xs-2" v-for="(value, index) in ability_scores" v-if="value.id !== 7">
						<div class="text-center">
							<div><strong>Bought</strong></div>
							<div><span class="value-box">@{{ability_scores[index].points_purchased}}</span></div>
							<div><span><button v-on:click="buyPoint(index)" type="button" role="button">+</button></span><span><button
									 v-on:click="refundPoint(index)" type="button" role="button">-</button></span></div>
						</div>

						<div class="text-center">
							<h4>+</h4>
						</div>

						<div class="text-center">
							<div><strong>Race</strong></div>
							<div><span class="value-box">@{{getComputedAsiByAttribute(index)}}</span></div>
						</div>

						<div class="text-center">
							<h4>+</h4>
						</div>

						<div class="text-center">
							<div><strong>Other</strong></div>
							<div><span class="value-box">0</span></div>
						</div>

					</div>

				</div>
			</div>


	</div>
	{{--<div id="tab-3">
		<p>Background</p>
	</div>--}}
	<div id="tab-4">
		<h2 class="text-center">Class/Level</h2>
		<h3 class="">Class/Level</h3>
		<h4 class=""><i>select at least 1</i></h4>
		<div id="class-levels-wrapper" style="border: 1px solid black;border-radius:3px;box-sizing:border-box;padding:25px;">
			<div class="content-wrap" style="display:flex;">
				<select @change="changeClass" id="char_class" name="class" v-model="char_class" style="padding:5px;flex-basis: 0;flex-grow: 1;flex-shrink: 1;margin-right: 120px;">
					<option v-for="(value, index) in classes" :value="value.name">@{{value.name}}</option>
				</select>
				<input @click="changeLevel" @change="changeLevel" type="number" name="level" v-model="character.level" style="width:10%;border:1px solid black;border-radius:3px;box-sizing:border-box;padding:5px;" />
			</div>
			<div><small><i>Add another class (coming soon)</i></small></div>

			<div style="margin-top:10px;">
				<strong>Saving Throw Proficiencies</strong>: <span v-for="(value, index) in class_data[char_class].proficiencies.saves">
					@{{value.abbr | uppercase}} </span>
			</div>
			<div>
				<strong>Weapon Proficiencies</strong>:
				<span v-for="(value, index) in class_data[char_class].proficiencies.weapon_types">@{{value | lowercase}}<span v-if="class_data[char_class].proficiencies.weapon_types.length > 1 && value !== class_data[char_class].proficiencies.weapon_types[class_data[char_class].proficiencies.weapon_types.length -1]">,
					</span>
				</span><template v-if="typeof class_data[char_class].proficiencies.weapons !== 'undefined'"><span v-if="class_data[char_class].proficiencies.weapons.length > 1">,
					</span><span v-for="(value, index) in class_data[char_class].proficiencies.weapons">@{{value.name | lowercase}}<span
						 v-if="class_data[char_class].proficiencies.weapons.length > 1 && value !== class_data[char_class].proficiencies.weapons[class_data[char_class].proficiencies.weapons.length -1]">,
						</span></span>
				</template>
			</div>
			<div>
				<strong>Armor Proficiencies</strong>:
				<span v-for="(value, index) in class_data[char_class].proficiencies.armor_types">@{{value | lowercase}}<span v-if="class_data[char_class].proficiencies.armor_types.length > 1 && value !== class_data[char_class].proficiencies.armor_types[class_data[char_class].proficiencies.armor_types.length -1]">,
					</span>
				</span><template v-if="typeof class_data[char_class].proficiencies.armor !== 'undefined'"><span v-if="class_data[char_class].proficiencies.armor.length > 1">,
					</span><span v-for="(value, index) in class_data[char_class].proficiencies.armor">@{{value.name | lowercase}}<span
						 v-if="class_data[char_class].proficiencies.armor.length > 1 && value !== class_data[char_class].proficiencies.armor[class_data[char_class].proficiencies.armor.length -1]">,
						</span></span>
				</template>
			</div>

			<div class="info-wrap" style="display:block">
				<h4>Hit Points</h4>
				<div><strong>Total: @{{character.hp_max}}</strong></div>
				<div>@{{char_class}}</div>
				<div style="padding-top:5px;" class="hit-die">Hit Die: @{{class_data[char_class].hit_die["die"]}}
					(@{{getAverageOfHitDie()}} avg)</div>
				<div style="display:flex; flex-direction:column;">
					<div style="display:flex;">
						<span style="text-align:center;flex-basis:0;flex-grow:1;"><strong>Level</strong></span>
						<span style="text-align:center;flex-basis:0;flex-grow:1;"><strong>Base</strong></span>
						<span style="text-align:center;flex-basis:0;flex-grow:1;"><strong>Con</strong></span>
						<span style="text-align:center;flex-basis:0;flex-grow:1;"><strong>Misc</strong></span>
						<span style="text-align:center;flex-basis:0;flex-grow:1;"><strong>Total</strong></span>
					</div>
					<div style="display:flex;background-color:rgba(0,0,0,.3);">
						<span style="text-align:center;flex-basis:0;flex-grow:1;"><strong>@{{character.level}}</strong></span>
						<span style="text-align:center;flex-basis:0;flex-grow:1;"><strong>@{{class_data[char_class].hit_die["base"]}}</strong></span>
						<span style="text-align:center;flex-basis:0;flex-grow:1;"><strong><span v-if="ability_scores['Constitution'].mod > 0">+</span>@{{ability_scores["Constitution"].mod}}</strong></span>
						<span style="text-align:center;flex-basis:0;flex-grow:1;"><strong>0</strong></span>
						<span style="text-align:center;flex-basis:0;flex-grow:1;"><strong>@{{character.hp_max}}</strong></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{--<div id="tab-5">
		<p>Spells</p>
	</div>--}}
	<div id="tab-6">
		<h2 class="text-center">Proficiencies</h2>
		<h3 class="">@{{char_class}}</h3>
		<h2>Skill Proficiency</h2>
		<h4 class=""><i>select @{{class_data[char_class].skills_granted}}</i></h4>
		<div class="proficiency-wrapper">
			<div class="skill" v-for="skill, index in class_data[char_class].starting_skills">
				<label :for="skill.name">@{{skill.name}}</label>
				<input type="checkbox" :id="skill.name" />
			</div>
		</div>
	</div>
	{{--<div id="tab-7">
		<p>Equipment</p>
	</div> --}}
</div>