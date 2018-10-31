import $ from 'jquery'
import * as $$ from 'xe/utils'
import bindAjaxForm from './ajax'

/**
* @class
*/
class formEntity {
  /**
  * @param {DOM|jQuery} element
  */
  constructor (element) {
    $$.eventify(this)

    this.preventedSubmit = false
    this.initialized = false

    if (element.tagName !== 'FORM') {
      element = $(element).closest('form')[0]
    }

    this.element = element
    this.$element = $(element)
    this.options = {
      wait: 750
    }

    this.init()
  }

  /**
   * @private
   */
  init () {
    if (this.initialized) return

    const that = this
    this.initialized = true

    const emitFormSubmit = $$.debounce(function emitFormSubmit (element, event) {
      return that.$$emit('submit', { element, event, preventSubmit: that.preventSubmit.bind(that) })
    }, this.options.wait, { leading: true, trailing: false })

    this.$element.on('submit', function (event) {
      if (that.$$hasListener('submit')) {
        // 폼 전송 이벤트를 중단
        event.preventDefault()

        emitFormSubmit(that.element, event)
          .then(() => {
            // preventSubmit()으로 임의로 중단하지 않은 경우 폼 전송
            if (!that.submitPrevented()) {
              that.submit()
            }
          })
          .catch(() => {
          })
      }
    })

    // ajax 폼 전송
    bindAjaxForm(this)
  }

  submit () {
    this.element.submit()
  }

  preventSubmit () {
    this.preventedSubmit = true
  }

  submitPrevented () {
    return this.preventedSubmit
  }
}

export default formEntity
