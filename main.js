var Monster = new Class({
	initialize: function(monster) {
		this.monster = $(monster);
		//set monster speed
		this.up = new Fx.Tween(this.monster, {
			property: 'bottom',
			duration: '500'
		});
		this.down = new Fx.Tween(this.monster, {
			property: 'bottom',
			duration: '300'
		});
		this.monster.addEvents({
			//float up
			mouseenter: function() {
				//cancel dropping if mouseenter
				this.dropGO = $clear(this.dropGO);
				//grab current y location
				y = this.monster.getStyle('bottom').toInt();
				//if below top, raise
				if(y<400)
					this.up.start(y+20+'px');
			}.bind(this),
			//snap down
			mouseleave: function() {
				//delayed drop function
				this.drop = function() { this.down.start('0px'); }
				this.dropGO = this.drop.delay('500',this);
			}.bind(this)
		});
	}
});

window.addEvent('domready', function() {
	
	new Monster('monsterChubs');
	new Monster('monsterFootball');

}); //END DOMREADY EVENT


