/* {[The file is published on the basis of YetiForce Public License 3.0 that can be found in the following directory: licenses/LicenseEN.txt or yetiforce.com]} */

import VuePlugin from 'quasar/src/vue-plugin.js'

import {
	QLayout,
	QPageContainer,
	QPage,
	QHeader,
	QFooter,
	QDrawer,
	QPageSticky,
	QPageScroller,
	QToolbar,
	QToolbarTitle,
	QBtn,
	QBreadcrumbs,
	QBreadcrumbsEl,
	QIcon,
	QInput,
	QToggle,
	QTooltip,
	QScrollArea,
	QList,
	QItem,
	QItemLabel,
	QItemSection,
	QTable,
	QDialog,
	QCard,
	QBar,
	QSpace,
	QCardSection,
	QCarousel,
	QCarouselSlide,
	QCarouselControl,
	QImg,
	QAvatar,
	QSeparator
} from 'quasar/src/components.js'
import * as directives from 'quasar/src/directives.js'
import { AppFullscreen } from 'quasar/src/plugins.js'

import KnowledgeBaseComponent from './KnowledgeBase.vue'
import mdi from 'quasar/icon-set/mdi-v3.js'
const Quasar = {
	...VuePlugin,
	install(Vue, opts) {
		VuePlugin.install(Vue, {
			components: {
				QLayout,
				QPageContainer,
				QPage,
				QHeader,
				QFooter,
				QDrawer,
				QPageSticky,
				QPageScroller,
				QToolbar,
				QToolbarTitle,
				QBtn,
				QBreadcrumbs,
				QBreadcrumbsEl,
				QIcon,
				QInput,
				QToggle,
				QTooltip,
				QScrollArea,
				QList,
				QItem,
				QItemLabel,
				QItemSection,
				QTable,
				QDialog,
				QCard,
				QBar,
				QSpace,
				QCardSection,
				QCarousel,
				QCarouselSlide,
				QCarouselControl,
				QImg,
				QAvatar,
				QSeparator
			},
			directives,
			plugins: { AppFullscreen },
			...opts
		})
	}
}
window.Vue.use(Quasar)
Quasar.iconSet.set(mdi)

let VueInstance = null
window.KnowledgeBase = {
	component: KnowledgeBaseComponent,
	mount(config) {
		KnowledgeBaseComponent.moduleName = config.moduleName
		VueInstance = new window.Vue(KnowledgeBaseComponent).$mount(config.el)
		return VueInstance
	}
}
export default VueInstance