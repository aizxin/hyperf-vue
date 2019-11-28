<template>
  <el-upload
      class="upload-demo"
      multiple
      :action="uploadUrl"
      :on-remove="handleRemove"
      :before-upload="beforeImgUpload"
      :on-success="handleImgSuccess"
      :file-list="fileList"
      list-type="picture">
    <el-button size="small" type="primary">点击上传</el-button>
    <div slot="tip" class="el-upload__tip">只能上传jpg/png文件</div>
  </el-upload>
</template>

<script>
export default {
  name: 'upload-mutil-img',
  props: {
    uploadUrl: {
      type: String,
      default: '//res.ccwb.cn/resource/upload/uploadFile.html'
    },
    photos: {
      type: Array
    },
    photoName: {
      type: String
    }
  },
  data () {
    return {
      fileList: [],
      imgLists: []
    }
  },
  created () {
  },
  methods: {
    handleRemove(file, fileList) {
      if (file.status === 'success') {
        this.imgLists = fileList.map(item => {
          return item.response ? item.response.data.url : item.url
        })
        this.$emit('remove-img', this.imgLists)
      }
    },
    // 图片上传成功时
    handleImgSuccess (res, file, fileList) {
      if (res.success === 'true') {
        this.imgLists = fileList.map(item => {
          return item.response ? item.response.data.url : item.url
        })
        this.$emit('on-img', this.imgLists)
      } else {
        this.$message(res.msg)
      }
    },
    // 图片上传前
    beforeImgUpload (file) {
      const isLt2M = file.size / 1024 / 1024 < 2
      if (!isLt2M) {
        this.$message.error('上传图片大小不能超过 2MB!')
      }
      return isLt2M
    }
  },
  watch: {
    photos (newPho) {
      if (newPho) {
        this.fileList = newPho.map((item, index) => {
          return {
            name: this.photoName + index,
            url: item
          }
        })
      } else {
        this.fileList = []
      }
    }
  }
}
</script>

<style>
  .avatar-uploader .el-upload {
    border: 1px dashed #d9d9d9;
    border-radius: 6px;
    cursor: pointer;
    position: relative;
    overflow: hidden;
  }

  .avatar-uploader .el-upload:hover {
    border-color: #409EFF;
  }

  .avatar-uploader-icon {
    font-size: 28px;
    color: #8c939d;
    width: 100px;
    height: 100px;
    line-height: 100px;
    text-align: center;
  }

  .avatar {
    width: 100px;
    height: 100px;
    display: block;
  }
</style>
