const types = {
  SET_FILTER: 'SET_FILTER',
  SET_FOLDER_LIST: 'SET_FOLDER_LIST',
  SET_MEDIA_LIST: 'SET_MEDIA_LIST',
  SET_PATH: 'SET_PATH',
  SET_PAGINATE: 'SET_PAGINATE',
  DELETE_FOLDER: 'DELETE_FOLDER',
  ADD_FOLDER: 'ADD_FOLDER',
  ADD_MEDIA: 'ADD_MEDIA'
}

/**
 * 필터 초기 값
 */
const initialFilter = {
  folder_id: null,
  page: 1
}

const state = {
  path: [],
  folder: [],
  media: [],
  paginate: {},
  filter: initialFilter
}

const getters = {
  media: state => (id = null) => {
    if (id !== null) {
      return state.media.find(v => v.id === id)
    }

    return state.media
  },
  folder (state) {
    return state.folder
  },
  path (state) {
    return state.path
  },
  currentFolder (state) {
    return state.path[state.path.length - 1]
  }
}

const actions = {
  setFilter ({ commit }, filter = {}, reset = false) {
    commit(types.SET_FILTER, filter, reset)
  },
  loadData ({ commit }, filter = {}) {
    return new Promise((resolve, reject) => {
      window.XE.get('/media_library', filter)
        .then((response) => {
          commit(types.SET_FOLDER_LIST, response.data.folder)
          commit(types.SET_MEDIA_LIST, response.data.file.data)
          commit(types.SET_PAGINATE, response.data.file)
          commit(types.SET_PATH, response.data.path)
          resolve()
        })
    })
  },
  addMedia ({ commit }, payload) {
    commit(types.ADD_MEDIA, payload)
  },
  viewFolder ({ commit }, payload) {
    this.dispatch('media/loadData', { folder_id: payload })
  },
  addFolder ({ commit }, payload) {
    commit(types.ADD_FOLDER, payload)
  },
  deleteFolder ({ commit }, folderId) {
    window.XE.delete('/media_manager/folder/' + folderId)
      .then((response) => {
        commit(types.DELETE_FOLDER, folderId)
      })
  }
}

const mutations = {
  [types.SET_FILTER] (state, filter, reset = false) {
    if (reset) {
      state.filter = { ...initialFilter, ...filter }
    } else {
      state.filter = { ...state.filter, ...filter }
    }
  },
  [types.SET_FOLDER_LIST] (state, payload) {
    state.folder = payload
  },
  [types.SET_MEDIA_LIST] (state, payload) {
    state.media = payload
  },
  [types.SET_PAGINATE] (state, payload) {
    state.paginate = payload
  },
  [types.SET_PATH] (state, payload) {
    state.path = payload
  },
  [types.DELETE_FOLDER] (state, payload) {
    state.folder.splice(state.folder.findIndex(item => item.id === payload), 1)
  },
  [types.ADD_FOLDER] (state, payload) {
    state.folder.push(payload)
  },
  [types.ADD_MEDIA] (state, payload) {
    state.media = [...payload, state.media]
  }
}

export const module = {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}