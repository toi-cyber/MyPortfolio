<template>
  <q-layout view="hHh lpR fFf">


    <q-page-container style="padding-top: 0;">
      <q-page padding>
        <div class="column q-col-gutter-md">


          <!--トップ-->


          <div class="col-12 head-section">
            <q-card flat class="section-card">
              <q-card-section>
                <p class="name">TOI TAMURA <br class="omo"> <span>Web Design & Systems Engineering</span></p>
                <h1 class="top-message">「使いやすい」 が <span>一番</span>。</h1>
              </q-card-section>
            </q-card>
          </div>


          <div class="col-12">
            <q-card flat class="section-card">
              <q-card-section>
                <div class="section-title">WORKS</div>
                <q-list class="works-list">
                  <q-item v-for="(work, index) in works" :key="index" class="work-frame">
                    <img :src="work.image" :alt="work.alt" />
                    <q-item-section>
                      <p class="genre">{{ work.genre }}</p>
                      <p class="product-name">
                        {{ work.productName }}
                        <q-btn v-if="work.url" dense round flat color="primary" icon="link"
                          @click="openExternalLink(work.url)" />
                      </p>
                      <p class="main-text">{{ work.description }}</p>
                      <span class="work-tag-list">
                        <q-icon v-for="(icon, iconIndex) in work.icons" :key="iconIndex" :color="icon.color"
                          :size="icon.size" :name="icon.name" />
                      </span>
                    </q-item-section>
                  </q-item>
                </q-list>
              </q-card-section>
            </q-card>
          </div>


          <!-- 得意なこと -->
          <div class="h100svh-center">
            <q-card flat class="section-card">
              <q-card-section class="items-center">
                <div class="section-title">得意なこと</div>
                <div class="row justify-around q-mt-md exp-ele-par">
                  <div v-for="(item, index) in expertise" :key="index" class="column items-center text-center exp-ele">
                    <q-icon :name="item.icon" size="6em" class="q-mb-sm" color="secondary" />
                    <div class="text-h6">{{ item.title }}</div>
                    <p class="q-mt-sm">{{ item.description }}</p>
                  </div>
                </div>
              </q-card-section>
            </q-card>
          </div>

          <!-- 自己紹介 -->
          <div class="col-12 ">
            <q-card flat class="section-card">
              <q-card-section class="items-center">
                <div class="section-title">自己紹介</div>
                <div class="prof-par">
                  <!-- プロフィール画像 -->
                  <img class="my-prof" src="/images/my-prof.jpg" alt="Avatar" />

                  <!-- プロフィール情報 -->
                  <div class="prof-right">
                    <div class="prof-name">田村 とい <span>Toi Tamura</span></div>
                    <div class="text-secondary q-mb-md"> Webデザイナー / システムエンジニア</div>
                    <p class="q-mb-sm">
                      <strong>出身:</strong> 東京都
                    </p>
                    <p class="q-mb-sm">
                      <strong>専門:</strong> フロントエンド開発、webデザイン、バックエンド開発
                    </p>

                    <p>
                      <strong>経歴:</strong> 英語コーチング事業を行う企業でwebサービスを開発。また、多数のフロントエンド開発に携わりました。
                    </p>

                    <p class="q-mb-sm">
                      「使いやすい」をモットーに開発をしています。UIや目に見える要素だけでなくシステム構成や管理・メンテナンスのしやすさにも
                      妥協することのない開発を心がけています。子供から年配の方まで、だれでも使いやすいサービスの開発のお手伝いをさせていただければ
                      幸いです。
                      こんなホームページが作りたい！や、このUIを改善してほしい！などどんな内容でも大歓迎ですのでご連絡お待ちしております。
                    </p>

                    <div class="row q-gutter-sm q-mt-md">
                      <q-btn icon="email" label="メール" type="a" href="tamuratoitoi1001@gmail.com" target="_blank"
                        color="primary" />
                      <!-- GitHubボタンにDeviconアイコンを適用 -->
                      <q-btn class="q-btn-with-icon" type="a" href="https://github.com/toi-cyber" target="_blank"
                        color="primary" no-caps>
                        <i class="devicon-github-original" style="font-size: 1.5em; margin-right: 8px;"></i>
                        <span>GitHub</span>
                      </q-btn>

                      <q-btn dense class="q-btn-with-icon" type="a" href="https://lin.ee/tebEM0u" target="_blank" flat
                        no-caps>
                        <img src="/images/LINE_Brand_icon.png" style="width: 1.7em; margin-right: 8px;" alt="">
                        <span>公式LINE</span>
                      </q-btn>

                    </div>


                  </div>
                </div>

              </q-card-section>

            </q-card>
          </div>




          <!-- スキルセット -->
          <div class="col-12" id="skills">
            <q-card flat class="section-card">
              <q-card-section>
                <div class="section-title">SKILLS</div>
                <div v-for="(category, index) in skills" :key="index" class="q-mb-md skill-par">
                  <div class="skill-category">{{ category.category }}</div>
                  <div class="row justify-center">
                    <div v-for="(skill, index) in category.items" :key="index"
                      class="column items-center text-center q-pa-md skill-item" style="width: 100px;">
                      <!-- 条件分岐: アイコンまたは画像 -->
                      <i v-if="skill.icon" :class="`dev-icon ${skill.icon}`"></i>
                      <img v-else-if="skill.url" :src="skill.url" alt="skill.name" class="skill-image" />

                      <q-item-label class="skill-name">{{ skill.name }}</q-item-label>
                      <q-rating v-model="skill.level" max="5" size="1em" color="secondary" />
                    </div>
                  </div>
                </div>
              </q-card-section>
            </q-card>
          </div>




        </div>
      </q-page>
    </q-page-container>
  </q-layout>
</template>

<script>
import { ref } from 'vue'
import { useQuasar } from 'quasar'

export default {
  setup() {
    const $q = useQuasar()
    const slide = ref(0)

    const toggleDarkMode = () => {
      $q.dark.toggle()
    }

    return {
      slide,
      toggleDarkMode,
      skills: [
        {
          category: 'Languages',
          items: [
            { name: '中国語', url: '/images/china.png', level: 4 },
            { name: '英語', url: '/images/us.png', level: 5 },
            { name: 'スペイン語', url: '/images/spain.png', level: 3 },
            { name: 'ドイツ語', url: '/images/germany.png', level: 2 },
            { name: 'フランス語', url: '/images/france.png', level: 2 },
          ]
        },
        {
          category: 'Programming Languages',
          items: [
            { name: 'HTML5', icon: 'devicon-html5-plain', level: 5 },
            { name: 'CSS3', icon: 'devicon-css3-plain', level: 5 },
            { name: 'PHP', icon: 'devicon-php-plain', level: 4 },
            { name: 'JavaScript', icon: 'devicon-javascript-plain', level: 5 },
            { name: 'TypeScript', icon: 'devicon-typescript-plain', level: 3 },
            { name: 'C', icon: 'devicon-c-plain', level: 4 },
            { name: 'C++', icon: 'devicon-cplusplus-plain', level: 4 },
            { name: 'C#', icon: 'devicon-csharp-plain', level: 4 },
            { name: 'Python', icon: 'devicon-python-plain', level: 3 },
            { name: 'Ruby', icon: 'devicon-ruby-plain', level: 2 },
            { name: 'Java', icon: 'devicon-java-plain', level: 2 },
            { name: 'MySQL', icon: 'devicon-mysql-plain', level: 4 },
          ]
        },
        {
          category: 'Frameworks & Libraries',
          items: [
            { name: 'Vue.js', icon: 'devicon-vuejs-plain', level: 5 },
            { name: 'Quasar', icon: 'devicon-quasar-plain', level: 5 },
            { name: 'Node.js', icon: 'devicon-nodejs-plain', level: 4 },
            { name: 'Nuxtjs', icon: 'devicon-nuxtjs-plain', level: 3 },
            { name: 'Next.js', icon: 'devicon-nextjs-plain', level: 2 },
            { name: 'jQuery', icon: 'devicon-jquery-plain', level: 3 },
            { name: 'Laravel', icon: 'devicon-laravel-plain', level: 2 },
            { name: 'Flutter', icon: 'devicon-flutter-plain', level: 4 },
           


          ]
        },

        {
          category: 'Tools',
          items: [
            { name: 'Git', icon: 'devicon-git-plain', level: 5 },
            { name: 'GitHub', icon: 'devicon-github-original', level: 5 },
            { name: 'VSCode', icon: 'devicon-visualstudio-plain', level: 5 },
            { name: 'Atom', icon: 'devicon-atom-plain', level: 5 },
            { name: 'Anaconda', icon: 'devicon-anaconda-plain', level: 4 },
            { name: 'Docker', icon: 'devicon-docker-plain', level: 3 },
            { name: 'Slack', icon: 'devicon-slack-plain', level: 5 },
            { name: 'Unity', icon: 'devicon-unity-plain', level: 4 },
            { name: 'Blender', icon: 'devicon-blender-original', level: 3 },

          ]
        },
        {
          category: 'Cloud & DevOps',
          items: [
            { name: 'Azure', icon: 'devicon-azure-plain', level: 2},
            { name: 'AWS', icon: 'devicon-amazonwebservices-plain', level: 2},
            { name: 'Firebase', icon: 'devicon-firebase-plain', level: 3},
          ]
        }
      ],

      works: [
        {
          image: '/images/torabit.png',
          alt: 'TORAbit Image',
          genre: 'シャドーイングサービス',
          productName: 'TORAbit',
          description:
            '英語学習をサポートするwebサービスです。シャドーイング、フレーズ暗記がブラウザできます。',
          url: 'https://torabit.net/userlogin/loginpage.php',
          icons: [
            { color: 'primary', size: '20px', name: 'smartphone' },
            { color: 'primary', size: '20px', name: 'desktop_windows' },
          ],
        },
        {
          image: '/images/torabit.net_lp_.png',
          alt: 'TORAbit Image',
          genre: 'シャドーイングサービス',
          productName: 'TORAbit LP',
          description:
            'TORAbitのランディングページです。ユーザーのニーズに訴えかける配置、配色を意識しています。',
          url: 'https://torabit.net/lp/',
          icons: [
            { color: 'primary', size: '20px', name: 'smartphone' },
            { color: 'primary', size: '20px', name: 'desktop_windows' },
          ],
        },
        {
          image: '/images/grasapo.jp_.png',
          alt: '施工AI Image',
          genre: '総合情報サイト',
          productName: 'グラサポ',
          description:
            '施工作業を効率的に共有できるサービスです。リアルタイムでの情報共有を可能にします。',
          url: 'https://grasapo.jp/#/',
          icons: [
            { color: 'primary', size: '20px', name: 'smartphone' },
            { color: 'primary', size: '20px', name: 'desktop_windows' },
          ],
        },

        {
          image: '/images/koemane.png',
          alt: 'AI声真似 Image',
          genre: 'AIボイス生成サービス',
          productName: 'AI声真似（仮）',
          description:
            '文章から有名人などの声に似せた朗読音声を生成するサービスです。近日中に公開予定です。',
          url: '',
          icons: [
            { color: 'primary', size: '20px', name: 'smartphone' },
            { color: 'primary', size: '20px', name: 'desktop_windows' },
          ],
        },
        {
          image: '/images/signage.png',
          alt: 'サイネージサイト Image',
          genre: 'デジタルサイネージ管理サイト',
          productName: 'iBoardSignage',
          description:
            'デジタルサイネージをクラウド上でリアルタイム管理するサイトです。近日中に公開予定です。',
          url: '',
          icons: [
            { color: 'primary', size: '20px', name: 'smartphone' },
            { color: 'primary', size: '20px', name: 'desktop_windows' },
          ],
        },
        {
          image: '/images/toitamura-portfolio.png',
          alt: 'ポートフォリオサイト Image',
          genre: 'ポートフォリオサイト',
          productName: 'TOI TAMURAのポートフォリオ',
          description:
            '私のポートフォリオサイトです。わかりやすさを追求した配置、配色を意識しています。',
          url: 'https://www.toitamura-portfolio.jp/#/',
          icons: [
            { color: 'primary', size: '20px', name: 'smartphone' },
            { color: 'primary', size: '20px', name: 'desktop_windows' },
          ],
        },
        {
          image: '/images/dotchinomikata.png',
          alt: 'どっちのミカタ？ Image',
          genre: 'AIジャッジサイト',
          productName: 'どっちのミカタ？',
          description:
            'AIによる意見補強と投票機能で日常のモヤモヤに白黒つけるサービスです。',
          url: 'https://docchino-mikata.web.app/top',
          icons: [
            { color: 'primary', size: '20px', name: 'smartphone' },
            { color: 'primary', size: '20px', name: 'desktop_windows' },
          ],
        },
      ],



      expertise: [
        {
          title: 'Webサイト作成',
          icon: 'web',
          description: '魅力的で使いやすいWebサイトをデザインし、SEOとパフォーマンスを重視したコーディングを行います。'
        },
        {
          title: 'フロントエンド作成',
          icon: 'devices',
          description: '最新のフレームワークを活用して、ユーザーフレンドリーでインタラクティブなフロントエンドを構築します。'
        },
        {
          title: 'バックエンド開発',
          icon: 'storage',
          description: '安全で拡張性の高いサーバーサイドの開発を行い、効率的なAPIとデータ管理を提供します。'
        }
      ],
    }
  },
  methods: {
    openExternalLink(url) {
      window.open(url, '_blank');
    },
  },
}
</script>