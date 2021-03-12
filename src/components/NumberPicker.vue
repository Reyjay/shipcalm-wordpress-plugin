<template>
  
    <div class="sc-number-picker">
        <fieldset data-quantity="">
            <legend>Change quantity</legend>
            <button type="button" title="Down" class="sub" @click='sub'>Down</button>
            <input type="number" name="quantity" pattern="[0-9]+" min="1" v-model="result" v-on:click="$emit('update', name)">

            <button type="button" title="Up" class="add" @click='add'>Up</button>
        </fieldset>
    </div>
  
</template>

<script>
  
  export default {
    name: 'NumberPicker',
    props: {
        value: String,
        startingValue: {
            type: Number,
            default: 0
        },
        cost: {
            type: Number,
            default: 0
        }
    },
    data () {
        return {
            result: this.startingValue
        }
    },
    methods: {
        emitResult () {
            this.$emit('input', this.result)
        },
        add () {
            this.result = parseInt(1) + parseInt(this.result);
            this.emitResult()
        },
        sub () {
            this.result = parseInt(this.result) - parseInt(1);
            this.emitResult()
        }
    },
    watch: {
        result: function() {
            // Emit this information to the parents component
            this.$emit("child-result", this.result);
        }
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>