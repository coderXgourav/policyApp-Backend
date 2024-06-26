/* 
Tool Cool Range Slider - Marks Plugin v1.0.1
https://github.com/mzusin/toolcool-range-slider 
MIT License        
Copyright (c) 2022-present, Miriam Zusin                         
*/
;(() => {
  var R = (r, n, t, c, d) => {
      let a = n - r
      return a === 0 ? t : ((c - t) * (d - r)) / a + t
    },
    I = (r) => !isNaN(parseFloat(r)) && isFinite(r),
    g = (r, n) => (I(r) ? Number(r) : n)
  var h = (r) => (r == null ? !1 : typeof r == 'boolean' ? r : r.trim().toLowerCase() === 'true')
  window.tcRangeSliderPlugins = window.tcRangeSliderPlugins || []
  var p = 11,
    y = 11,
    A = () => {
      let r = null,
        n = null,
        t = null,
        c = null,
        d = null,
        a = !1,
        s = p,
        u = y,
        L = () => {
          var l
          let e = (l = r == null ? void 0 : r.shadowRoot) == null ? void 0 : l.querySelector('#range-slider')
          ;(t = document.createElement('div')), t.classList.add('marks'), (c = document.createElement('div')), c.classList.add('mark-points'), t.append(c), (d = document.createElement('div')), d.classList.add('mark-values'), t.append(d), e.append(t)
        },
        P = () => {
          !n || !t || t.classList.toggle('is-reversed', n.isRightToLeft() || n.isBottomToTop())
        },
        S = () => {
          var v
          if (!t || !n) return
          let e = n.getMin(),
            l = n.getMax(),
            E = n.getType() === 'vertical',
            f = n.isRightToLeft() || n.isBottomToTop()
          for (let i = 0; i < s; i++) {
            let o = document.createElement('div')
            o.classList.add('mark', `mark-${i}`)
            let m = s === 0 ? 0 : (i * 100) / (s - 1)
            E ? (f ? (o.style.top = `${100 - m}%`) : (o.style.top = `${m}%`)) : f ? (o.style.left = `${100 - m}%`) : (o.style.left = `${m}%`), c == null || c.append(o)
          }
          let b = n.getData()
          for (let i = 0; i < u; i++) {
            let o = document.createElement('div')
            o.classList.add('mark-value', `mark-value-${i}`)
            let m = u === 0 ? 0 : (i * 100) / (u - 1),
              w = R(0, u - 1, e, l, i)
            ;(o.textContent = (b ? ((v = b[Math.round(w)]) != null ? v : '') : w).toString()), E ? (f ? (o.style.top = `${100 - m}%`) : (o.style.top = `${m}%`)) : f ? (o.style.left = `${100 - m}%`) : (o.style.left = `${m}%`), d == null || d.append(o)
          }
        },
        k = (e, l) => {
          T(), (s = e), (u = l), s <= 0 && (s = p), u <= 0 && (u = y), L(), S(), P()
        },
        C = (e) => {
          ;(a = e), a ? (L(), S(), P()) : T()
        },
        x = (e) => {
          !t || t.style.setProperty('--marks-color', e)
        },
        M = (e) => {
          !t || t.style.setProperty('--values-color', e)
        },
        T = () => {
          t == null || t.remove()
        }
      return {
        get name() {
          return 'Marks'
        },
        init: (e, l, E, f) => {
          var b, v
          ;(n = f), (r = e), (a = h(r.getAttribute('marks'))), a && (k(g(r.getAttribute('marks-count'), p), g(r.getAttribute('marks-values-count'), y)), x((b = r.getAttribute('marks-color')) != null ? b : '#cbd5e1'), M((v = r.getAttribute('marks-values-color')) != null ? v : '#475569'))
        },
        onAttrChange: (e, l) => {
          e === 'marks' && C(h(l)), e === 'marks-count' && k(g(l, p), u), e === 'marks-values-count' && k(s, g(l, y)), e === 'marks-color' && x(l), e === 'marks-values-color' && M(l)
        },
        gettersAndSetters: [
          {
            name: 'marksEnabled',
            attributes: {
              get() {
                return a != null ? a : !1
              },
              set: (e) => {
                C(h(e))
              }
            }
          },
          {
            name: 'marksCount',
            attributes: {
              get() {
                return s != null ? s : p
              },
              set: (e) => {
                k(g(e, p), u)
              }
            }
          },
          {
            name: 'marksValuesCount',
            attributes: {
              get() {
                return s != null ? s : p
              },
              set: (e) => {
                k(s, g(e, y))
              }
            }
          },
          {
            name: 'marksColor',
            attributes: {
              get() {
                return t == null ? void 0 : t.style.getPropertyValue('--marks-color')
              },
              set: (e) => {
                x(e)
              }
            }
          },
          {
            name: 'markValuesColor',
            attributes: {
              get() {
                return t == null ? void 0 : t.style.getPropertyValue('--values-color')
              },
              set: (e) => {
                M(e)
              }
            }
          }
        ],
        destroy: T,
        css: `
:root{
  --marks-color: #cbd5e1;
  --values-color: #475569;
}
  
.marks{
  width: 100%;
  display: flex;
  flex-direction: column;
  position: relative;
  top: 100%;
  left: 0;
  color: var(--values-color, #475569);
}

.type-vertical .marks{
  width: auto;
  height: 100%;
  top: 0;
  left: 100%;
  flex-direction: row;
}
    
.mark-points{
  width: 100%;
  height: 1rem;
  position: relative;
  margin-top: 5px;
}  

.type-vertical .mark-points {
  width: 1rem;
  height: 100%;
  margin-top: 0;
  margin-left: 5px;
}

.mark-values{
  width: 100%;
  height: 1rem;
  position: relative;
}

.type-vertical .mark-values {
  width: 1rem;
  height: 100%;
  margin-left: 0.7rem;
}

.mark{
  background: var(--marks-color, #cbd5e1);
  width: 2px;
  height: 5px;
  position: absolute;
  transform: translateX(-50%);
}  

.type-vertical .mark {
    width: 5px;
    height: 2px;
    transform: translateY(-50%);
}

.mark-value{
  position: absolute;
  transform: translateX(-50%);
}

.type-vertical .mark-value{
    transform: translateY(-50%);
}
    `
      }
    }
  window.tcRangeSliderPlugins.push(A)
  var $ = A
})()
